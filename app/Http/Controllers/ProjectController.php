<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

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

                $viewButton = '<a href="'.$viewRoute.'" class="view btn btn-primary btn-sm">View</a>';
                $editButton = '<a href="'.$editRoute.'" class="edit btn btn-primary btn-sm">Edit</a>';
                $deleteButton = '<a href="'.$deleteRoute.'" class="delete btn btn-danger btn-sm">Delete</a>';
                return $viewButton.$editButton.$deleteButton;
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
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
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
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
