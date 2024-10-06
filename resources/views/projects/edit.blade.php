@extends('layout.layout')

@section('projects-edit')
    <div class="container p-5">
        <h1 class="text-center">Edit</h1>
        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label text-left">Project Title</label>
                <input name='project_name' type="text" class="form-control" id="title" placeholder="Enter anime name"
                    value="{{ $project->project_name }}">
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input name='start_date' type="date" class="form-control" id="start_date"
                    value="{{ $project->start_date }}">
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input name='end_date' type="date" class="form-control" id="end_date" value="{{ $project->end_date }}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success btn-md py-2 px-5">Add</button>
            </div>

        </form>
    </div>
@endsection
