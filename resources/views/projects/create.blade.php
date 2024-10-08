@extends('layout.layout')

@section('projects-show')
    <div class="container p-5 poppins">
        <div class="row d-flex justify-content-center">
            <div class="col-6 p-5 border border-3 border-secondary">
                <h1 class="text-center">Create Project</h1>
                <form action="{{ route('projects.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label text-left">Project Title</label>
                        <input name='project_name' type="text" class="form-control" id="title"
                            placeholder="Enter project name" required>
                    </div>
                    <div class="mb-3">
                        <label for="descrip" class="form-label text-left">Description</label>
                        <textarea name="descrip" class="form-control" id="descrip" rows="4" placeholder="Enter a short description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input name='start_date' type="date" class="form-control" id="start_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input name='end_date' type="date" class="form-control" id="end_date" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-md py-2 px-5">Add</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
