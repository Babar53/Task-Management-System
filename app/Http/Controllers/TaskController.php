<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use App\Events\TaskCreated;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Task::select('tasks.*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editRoute = route('tasks.edit', $row->id);
                    $viewRoute = route('tasks.show', $row->id);
                    $deleteRoute = route('tasks.destroy', $row->id);

                    $viewBtn = '<a href="'.$viewRoute.'" class="view text-success" title="View" style="margin: 5px; font-size: 1.2em;"><i class="fas fa-eye"></i></a>';
                    $editBtn = '<a href="'.$editRoute.'" class="edit" title="Edit" style="margin: 5px; font-size: 1.2em;"><i class="fas fa-edit"></i></a>';
                    $deleteBtn = '<a href="'.$deleteRoute.'" class="delete text-danger" title="Delete" style="margin: 5px; font-size: 1.2em;" onclick="return confirm(\'Are you sure you want to delete this task?\')"><i class="fas fa-trash-alt"></i></a>';

                    return '<div class="d-flex justify-content-center" style="gap: 10px;">' . $viewBtn . $editBtn . $deleteBtn . '</div>';
                })
                ->addColumn('status', function($row) {
                    return $row->status;
                })
                ->addColumn('priority', function($row) {
                    return $row->priority;
                })
                ->rawColumns(['action', 'status', 'priority'])
                ->make(true);
        }
        $title = 'Tasks';
        return view('panel.tasks.index' , compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Task';
        $projects =Project::whereNot('status' , 'completed')->get();
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'employee');
        })->get();
        return view('panel.tasks.create', ['title' => $title , 'projects' => $projects , 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'project_id' => 'required|exists:projects,id',
            'user_id' => 'required|exists:users,id',
            'priority' => 'required|in:low,medium,high,urgent',
            'due_date' => 'nullable|date|after_or_equal:today',
        ]);

        try {
            // Create the task
            $task = new Task();
            $task->title = $validated['title'];
            $task->description = $validated['description'] ?? null;
            $task->project_id = $validated['project_id'];
            $task->assigned_to = $validated['user_id'];
            $task->created_by = auth()->id();
            $task->priority = $validated['priority'];
            $task->status = 'todo';

            // Set due date if provided
            if (!empty($validated['due_date'])) {
                $task->due_date = $validated['due_date'];
            }
            //fire event after task created
            event(new MyEvent($task));

            $task->save();


            return redirect()->route('tasks.index')
                ->with('success', 'Task created successfully');

        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Error creating task: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
