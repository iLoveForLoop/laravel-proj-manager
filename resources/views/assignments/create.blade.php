@extends('layout.layout')

@section('assignment')
    <div class="container p-5 poppins">
        <div class="row d-flex justify-content-center">
            <div class="col-6 p-5 border border-3 border-secondary">
                <h1 class="text-center">Assign Task</h1>
                <form action="{{ route('assignments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="project_id" value="{{ request()->query('project_id') }}">
                    <div class="mb-3">
                        <label for="member" class="form-label text-left">Member</label>
                        <select name="member_id" id="member">
                            @foreach ($members as $member)
                                <option value="{{ $member->id }}">{{ $member->first_name }}
                                    {{ $member->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="task" class="form-label text-left">Task</label>
                        <select name="task_id" id="task">
                            @foreach ($tasks as $task)
                                <option value="{{ $task->id }}">{{ $task->task_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-md py-2 px-5">Add</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
