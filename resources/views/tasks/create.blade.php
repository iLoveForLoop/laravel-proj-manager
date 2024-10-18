@extends('layout.layout')

@section('task-create')
    <div class="container p-5 poppins">
        <div class="row d-flex justify-content-center">
            <div class="col-6 p-5 border border-3 border-secondary">
                <h1 class="text-center">Create Task</h1>
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="project_id" value="{{ request()->query('project_id') }}">
                    <div class="mb-3">
                        <label for="title" class="form-label text-left">Task Name</label>
                        <input name='task_name' type="text" class="form-control" id="title"
                            placeholder="Enter a task" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label text-left">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="4"
                            placeholder="Enter a short description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="due_date" class="form-label">Due Date</label>
                        <input name='due_date' type="date" class="form-control" id="due_date" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-md py-2 px-5">Add</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
