<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Events\ProjectAssigned;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if($request->ajax()){
            $projects = Project::all();
            return datatables()->of($projects)
                ->addIndexColumn()
                ->addColumn('action' ,function ($project){

                $viewRoute = route('projects.show',$project->id);
                $editRoute = route('projects.edit',$project->id);
                $deleteRoute = route('projects.destroy',$project->id);
                $assignRoute = route('projects.assign',$project->id);

                $viewButton = '<a href="'.$viewRoute.'" class="view text-success" title="View" style="margin: 5px; font-size: 1.2em;"><i class="fas fa-eye"></i></a>';
                $editButton = '<a href="'.$editRoute.'" class="edit "title="Edit" style="margin: 5px; font-size: 1.2em;"><i class="fas fa-edit"></i></a>';
                $deleteButton = '<a href="'.$deleteRoute.'" class="delete text-danger" title="Delete" style="margin:  5px; font-size: 1.2em;" onclick="return confirm(\'Are you sure you want to delete this project?\')"><i class="fas fa-trash-alt"></i></a>';
                    $assignRoute = '<a href="'.$deleteRoute.'" class="assign-project text-info" title="Assign" data-bs-toggle="modal" data-bs-target=".assign-project-modal" data-project-id="'. $project->id.'"  style="margin:  5px; font-size: 1.2em;"><i class="fas fa-user-plus"></i></a>';
                return $viewButton.$editButton.$deleteButton.$assignRoute;
            })->rawColumns(['action'])
                ->make(true);
        }
        return view('panel.projects.index', ['title' => 'Projects']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Project';
        return view('panel.projects.create', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'priority' => 'required',
        ]);
        $validatedData['created_by'] = auth()->id(); // or auth()->user()->id
        Project::create($validatedData);
        Log::info('Broadcasting MyEvent for task: ' . $validatedData['name']);

        broadcast(new MyEvent($validatedData))->toOthers();
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($project_id)
    {
        $project = Project::findOrFail($project_id);
        $title = 'View Project';
        return view('panel.projects.view', ['title' => $title, 'project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($project_id)
    {
$project = Project::findOrFail($project_id);
        $title = 'Edit Project';
        return view('panel.projects.edit', ['title' => $title, 'project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $project_id)
    {
        $project = Project::find($project_id);
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'priority' => 'required',
        ]);
        $project->update($validatedData);
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }

    /**
     * Assign project to a user
     */
    /**
     * Assign project to a user
     */
    public function assignProject(Request $request)
    {
        try {
            // Validate the request
            $validated = $request->validate([
                'project_id' => 'required|integer|exists:projects,id',
                'user_id' => 'required|integer|exists:users,id',
                'notes' => 'nullable|string|max:1000'
            ]);

            // Check if the project exists and is active
            $project = Project::findOrFail($validated['project_id']);

            // Check if the user exists and is active
            $user = User::where('id', $validated['user_id'])
                ->firstOrFail();

            // Check if the assignment already exists
            $existingAssignment = DB::table('assigned_projects')
                ->where('project_id', $validated['project_id'])
                ->where('user_id', $validated['user_id'])
                ->exists();

            if ($existingAssignment) {
                return response()->json([
                    'success' => false,
                    'message' => 'This project is already assigned to the selected user.'
                ], 409); // 409 Conflict
            }

            // Assign the project using the relationship
            $project->assignedUsers()->attach($validated['user_id'], [
                'assigned_by' => auth()->id(),
                'notes' => $validated['notes'] ?? null,
                'assigned_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // You might want to dispatch an event here to notify the user
            // event(new ProjectAssigned($project, $user, auth()->user()));
            \Log::info('Project assigned', [
                'project_id' => $project->id,
                'assigned_to' => $user->id,
                'assigned_by' => auth()->id(),
                'ip_address' => $request->ip()
            ]);

            event(new ProjectAssigned(
                $project,
                $user,
                auth()->user(),
                $validated['notes'] ?? null
            ));
            return response()->json([
                'success' => true,
                'message' => 'Project assigned successfully!',
                'data' => [
                    'project_id' => $project->id,
                    'user_id' => $user->id,
                    'assigned_at' => now()->toDateTimeString()
                ]
            ]);

        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation Error',
                'errors' => $e->errors()
            ], 422); // 422 Unprocessable Entity

        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Project or User not found or inactive'
            ], 404); // 404 Not Found

        } catch (\Exception $e) {
            \Log::error('Error assigning project: ' . $e->getMessage(), [
                'exception' => $e,
                'user_id' => auth()->id(),
                'project_id' => $request->project_id ?? 'unknown',
                'target_user_id' => $request->user_id ?? 'unknown'
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Failed to assign project. Please try again later.'
            ], 500); // 500 Internal Server Error
        }
    }

    /**
     * Get list of users for assignment
     */
    public function getUsersForAssignment()
    {


        $users = User::whereHas('roles', function ($query) {
    $query->where('name', 'manager');
})->get();
        return response()->json([
            'success' => true,
            'users' => $users
        ]);
    }
}
