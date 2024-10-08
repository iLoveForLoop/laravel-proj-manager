@extends('layout.layout')



@section('projects-edit')
    <div class="container p-5 poppins">
        <div class="row d-flex justify-content-center">
            <div class="col-6 p-5 border border-3 border-secondary">
                <h1 class="text-center">Edit Project</h1>
                <form action="{{ route('projects.update', $project->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label text-left">Project Title</label>
                        <input name='project_name' type="text" class="form-control" id="title"
                            placeholder="Enter anime name" value="{{ $project->project_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="descrip" class="form-label text-left">Description</label>
                        <textarea rows="4" name='descrip' type="text" class="form-control" id="title"
                            placeholder="Enter a short description" required>{{ $project->descrip }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input name='start_date' type="date" class="form-control" id="start_date"
                            value="{{ $project->start_date }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input name='end_date' type="date" class="form-control" id="end_date"
                            value="{{ $project->end_date }}" required>
                    </div>
                    <div class="mb-3">
                        @php
                            $secondOption = $project->status == 'Ongoing' ? 'Completed' : 'Ongoing';
                        @endphp
                        <label for="status" class="form-label text-left">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected value="{{ $project->status }}">{{ $project->status }}</option>
                            <option value="{{ $secondOption }}">{{ $secondOption }}</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-md py-2 px-5">Update</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
