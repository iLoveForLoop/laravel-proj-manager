@extends('layout.layout')

@section('member-show')
    <div class="d-flex flex-column" style="height: 100vh">
        <header class=" bg-dark text-light poppins" style="width: 100%">
            <div class="container d-flex py-4 align-items-center">
                <a href="{{ route('projects.show', $task->project_id) }}" class="hover-effect">
                    <svg class="me-3 arrow-svg" width="40" height="40" style="fill: white;"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
                    </svg>
                </a>

                <h1 class="m-0 fs-1">Task Information</h1>
            </div>
        </header>

        <div class="container d-flex flex-column align-items-center justify-content-center poppins flex-grow-1">
            <div class="w-75 bg-dark p-5 rounded shadow-lg text-light fs-3" style="height: auto">
                <p>Task Name: <span class="fw-light"> {{ $task->task_name }}</span></p>
                <p>ID: <span class="fw-light"> {{ $task->id }}</span></p>
                <p>Project ID: <span class="fw-light"> {{ $task->project_id }}</span></p>

                <p>Task Description: <span class="fw-light"> {{ $task->description }}</span></p>
                <p>Due Date: <span class="fw-light"> {{ $task->due_date }}</span></p>
            </div>
        </div>


    </div>
@endsection


<style>
    .hover-effect {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
    }

    .arrow-svg {
        transition: transform 0.3s ease;
    }

    .hover-effect:hover .arrow-svg {
        transform: translateX(-10px);

    }

    .big {
        font-size: 11em
    }

    .hide-scrollbar {
        overflow: auto;
        scrollbar-width: none;
    }
</style>
