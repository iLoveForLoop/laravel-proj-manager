@extends('layout.layout')

@section('projects-show')
    <header class=" bg-dark text-light poppins" style="width: 100%">
        <div class="container d-flex py-4 align-items-center">
            <a href="/projects" class="hover-effect">
                <svg class="me-3 arrow-svg" width="40" height="40" style="fill: white;" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
                </svg>
            </a>

            <h1 class="m-0">PROJECT INFORMATION</h1>
        </div>
    </header>
    <div class="poppins container">
        <div class="row" style="height: 87vh">
            <div class="col-6 py-3">
                <h4 class="my-1">Project Name:</h4>
                <hr>
                <h4 class="fw-light">{{ $project->project_name }}</h4>
                <hr>
                <h5><span class="">Status:</h5>
                <hr>
                <h5><span class="fw-light">{{ $project->status }}</h5>
                <hr>
                <h5><span class="">Description:</h5>
                <hr>
                <h5><span class="fw-light">{{ $project->descrip }}</h5>
                <hr>
                <h5><span class="">Start Date:</h5>
                <hr>
                <h5><span class="fw-light">{{ $project->start_date }}</h5>
                <hr>
                <h5> <span class="">End Date:</h5>
                <hr>
                <h5><span class="fw-light">{{ $project->end_date }}</h5>
            </div>
            @include('teammembers.index')
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
</style>
