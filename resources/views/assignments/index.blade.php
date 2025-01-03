@extends('layout.layout')

@section('assignment')
    @php
        $alertStatus = '';
        $alertMessage = '';
        if (session()->has('success')) {
            $alertStatus = 'success';
            $alertMessage = session('success');
        } elseif (session()->has('delete')) {
            $alertStatus = 'danger';
            $alertMessage = session('delete');
        }

    @endphp

    @if ($alertStatus !== '')
        <div class="w-100 position-fixed d-flex justify-content-end align-items-center px-5" style="height: 15vh"
            id="alertDiv">
            <div class="alert alert-{{ $alertStatus }} position-fixed poppins fw-light fade-in" role="alert" id="alert-box">
                {{ $alertMessage }}
            </div>
        </div>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const alertBox = document.getElementById("alert-box");
            const alertDiv = document.getElementById("alertDiv")
            console.log(alertBox)
            if (alertBox) {
                console.log('reached here')
                setTimeout(() => {
                    alertBox.classList.add("fade-out");
                    setTimeout(() => {
                        alertDiv.classList.add("hide")
                    }, 1000);
                }, 1500);
            }
        });
    </script>


    <div class="d-flex flex-column poppins" style="height: 100vh">
        <header class=" bg-dark text-light poppins" style="width: 100%">
            <div class="container d-flex py-4 align-items-center justify-content-between px-1">
                <div class="d-flex">
                    <a href="{{ route('projects.show', $project_id) }}" class="hover-effect">
                        <svg class="me-3 arrow-svg" width="40" height="40" style="fill: white;"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
                        </svg>
                    </a>

                    <h1 class="m-0 fs-1">ASSIGNMENTS</h1>
                </div>
                <div>
                    <a class="btn btn-info py-2"
                        href="{{ route('assignments.create', ['project_id' => $project_id]) }}">Assign Task</a>
                </div>
            </div>
        </header>

        <div class="container flex-grow-1 py-4">
            <table class="table table-striped table-hover table-bordered align-middle fs-5">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">Team Member Name</th>
                        <th class="text-center">Task Name</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($assignments->isNotEmpty())
                        @foreach ($assignments as $assignment)
                            <tr>
                                <td>{{ $assignment->teamMember->first_name }} {{ $assignment->teamMember->last_name }}</td>
                                <td>{{ $assignment->task->task_name }}</td>
                                <td class="text-center">
                                    <form class="m-0"
                                        action="{{ route('assignments.destroy', $assignment->id) }}?project_id={{ $project_id }}"
                                        method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="border border-0 bg-transparent m-0 box" type="submit"
                                            href=""><i class="bi bi-trash-fill text-danger fs-3"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>No assignments yet.</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>

    </div>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
                transform: translateY(0);
            }

            to {
                opacity: 0;
                transform: translateY(-20px);
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        .fade-out {
            animation: fadeOut 0.5s ease-in-out forwards;
        }

        .hide {
            visibility: hidden;
            opacity: 0;
        }
    </style>

@endsection
