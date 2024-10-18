@extends('layout.layout')

@section('assignment')
    <div class="d-flex flex-column" style="height: 100vh">
        <header class=" bg-dark text-light poppins" style="width: 100%">
            <div class="container d-flex py-4 align-items-center justify-content-between">
                <div class="d-flex">
                    <a href="{{ url()->previous() }}" class="hover-effect">
                        <svg class="me-3 arrow-svg" width="40" height="40" style="fill: white;"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
                        </svg>
                    </a>

                    <h1 class="m-0 fs-1">ASSIGNMENTS</h1>
                </div>
            </div>
        </header>

        <div class="container flex-grow-1">
            <table class="fs-3">
                <thead>
                    <tr>
                        <th>Task Name</th>
                        <th>Team Member Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assignments as $assignment)
                        <tr>
                            <td>{{ $assignment->task->task_name }}</td>
                            <td>{{ $assignment->teamMember->first_name }} {{ $assignment->teamMember->last_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
