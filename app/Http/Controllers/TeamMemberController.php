<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = TeamMember::all();
        return view("teammembers.index",compact('members') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teammembers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{

    $teammembers = new TeamMember();


    $id = $request->input('project_id');

    $teammembers->project_id = $id;
    $teammembers->first_name = $request->first_name;
    $teammembers->last_name = $request->last_name;
    $teammembers->email = $request->email;


    $teammembers->save();

    return redirect()->route('projects.show', ['project' => $id])->with('success', 'Added Successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teammembers = TeamMember::all();
        $teammember = TeamMember::find($id);

        return view("teammembers.show", ["teammembers"=> $teammembers,"teammember"=> $teammember]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}