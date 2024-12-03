<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\TeamMember;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $request->validate([
        'project_id' => 'nullable|integer|exists:projects,id',
    ]);

    $project_id = $request->query('project_id');

    $assignments = Assignment::with(['task', 'teamMember']);

    if ($project_id) {
        $assignments->whereHas('task', function ($query) use ($project_id) {
            $query->where('project_id', $project_id);
        })
        ->whereHas('teamMember', function ($query) use ($project_id) {
            $query->where('project_id', $project_id);
        })
        ->get();
    }

    $assignments = $assignments->get();

    return view('assignments.index', compact('assignments', 'project_id'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {



        $request->validate([
            'project_id' => 'nullable|integer|exists:projects,id',
        ]);

        $project_id = $request->query('project_id');

        $tasks = Task::where('project_id', $project_id)->get();
        $members = TeamMember::where('project_id', $project_id)->get();



        return view('assignments.create', compact('tasks', 'members'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $addassignment = new Assignment();
        $addassignment->task_id = $request->task_id;
        $addassignment->team_member_id = $request->member_id;
        $addassignment->save();

        $assignments = Assignment::with(['task', 'teamMember']);
        $project_id = $request->input('project_id');
        if ($project_id) {
            $assignments->whereHas('task', function ($query) use ($project_id) {
                $query->where('project_id', $project_id);
            })
            ->whereHas('teamMember', function ($query) use ($project_id) {
                $query->where('project_id', $project_id);
            })
            ->get();
        }

        $assignments = $assignments->get();


        return redirect()->route('assignments.index', ['project_id' => $project_id])->with('success', 'Added Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $assignment = Assignment::findOrFail($id);
        $assignment->delete();


        $assignments = Assignment::with(['task', 'teamMember']);

        $project_id = request('project_id');
        if($project_id) {
            $assignments->whereHas('task', function ($query) use ($project_id) {
                $query->where('project_id', $project_id);
            })
            ->whereHas('teamMember', function ($query) use ($project_id) {
                $query->where('project_id', $project_id);
            })
            ->get();
        }

        $assignments = $assignments->get();

        return redirect()->route('assignments.index', ['project_id' => $project_id])
    ->with('delete', 'Deleted Successfully!');

    }
}