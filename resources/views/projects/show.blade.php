@extends('layout.layout')

@section('projects-show')
    <div style="height: 100vh">
        <header class=" bg-dark text-light poppins" style="width: 100%">
            <div class="container d-flex py-4 align-items-center">
                <a href="/projects">
                    <svg class="me-3" width="40" height="40" style="fill: white;" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
                    </svg>
                </a>

                <h1 class="m-0">PROJECT INFORMATION</h1>
            </div>

        </header>
        <div class="poppins container" style="height: 100vh">
            <div class="row">
                <div class="col-6 py-3" style="height: 100vh">
                    <h3 class="my-1">Project Name: <span class="fw-light">{{ $project->project_name }}</span></h3>
                    <hr>
                    <h5><span class="fw-light">Status:</span> {{ $project->status }}</h5>
                    <hr>
                    <h5><span class="fw-light">Description:</span> {{ $project->descrip }}</h5>
                    <hr>
                    <h5><span class="fw-light">Start Date:</span> {{ $project->start_date }}</h5>
                    <hr>
                    <h5> <span class="fw-light">End Date:</span> {{ $project->end_date }}</h5>
                </div>
                @include('teammembers.index')
            </div>
        </div>
    </div>





    {{-- @include('projects.index') --}}
@endsection
