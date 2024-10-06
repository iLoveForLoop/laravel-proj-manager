@extends('layout.layout')

@section('projects-show')
    <h1>PROJECT INFORMATION</h1>
    <h2>Project Name: {{ $project->project_name }}</h2>
    <h2>Status: {{ $project->status }}</h2>

    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>


    {{-- @include('projects.index') --}}
@endsection
