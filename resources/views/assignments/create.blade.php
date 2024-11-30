@extends('layout.layout')

@section('assignment')
    <div class="container py-5 poppins d-flex  justify-content-center align-items-center" style="height: 100vh">
        <div class="row justify-content-center w-100">
            <div class="col-md-6 shadow-lg p-4 rounded border border-dark border-2">
                <h1 class="text-center mb-4 text-dark">Assign Task</h1>
                <form action="{{ route('assignments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="project_id" value="{{ request()->query('project_id') }}">

                    <div class="mb-3">
                        <label for="member" class="form-label">Member</label>
                        <select name="member_id" id="member" class="form-select">
                            @foreach ($members as $member)
                                <option value="{{ $member->id }}">{{ $member->first_name }} {{ $member->last_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="task" class="form-label">Task</label>
                        <select name="task_id" id="task" class="form-select">
                            @foreach ($tasks as $task)
                                <option value="{{ $task->id }}">{{ $task->task_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-dark px-5 py-2">Assign</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
