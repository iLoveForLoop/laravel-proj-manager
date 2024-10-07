<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Projects::all();
        return view("projects.index", ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Projects();
        $project->project_name = $request->project_name;
        $project->descrip = $request->descrip;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->status = 'Ongoing';
        $project->save();

        return redirect()->route('projects.index')->with('success','Successfully Created Project');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $projects = Projects::all();
        $project = Projects::findOrFail($id);
        return view('projects.show', ['project'=> $project, 'projects' => $projects]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Projects::findOrFail($id);

        return view('projects.edit', ['project'=> $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Projects::findOrFail($id);
        $project->project_name = $request->project_name;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->status = 'Edited';
        $project->save();

        return redirect()->route('projects.index')->with('success','Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Projects::findOrFail($id);
        $project->delete();
        return redirect()->back()->with('delete','Deleted Successfully');
    }
}