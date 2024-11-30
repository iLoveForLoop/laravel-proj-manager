@extends('layout.layout')

@section('projects-show')
    <div style="height: 100vh">
        <header class=" bg-dark text-light poppins" style="width: 100%">
            <div class="container d-flex py-4 align-items-center justify-content-between">
                <div class="d-flex">
                    <a href="/projects" class="hover-effect">
                        <svg class="me-3 arrow-svg" width="40" height="40" style="fill: white;"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
                        </svg>
                    </a>

                    <h1 class="m-0 fs-1">PROJECT INFORMATION</h1>
                </div>

                <div>
                    <a class="btn btn-info py-2"
                        href="{{ route('assignments.index', ['project_id' => $project->id]) }}">Assignments</a>
                </div>

            </div>
        </header>
        <div class="poppins container">
            <div class="row" style="height: 87vh">
                <div class="col-4 py-3">
                    <h4 class="my-1">Project Name:</h4>
                    <hr>
                    <h4 class="fw-light ms-3">{{ $project->project_name }}</h4>
                    <hr>
                    <h5><span class="">Status:</h5>
                    <hr>
                    <h5><span class="fw-light ms-3">{{ $project->status }}</h5>
                    <hr>
                    <h5><span class="">Description:</h5>
                    <hr>
                    <h5><span class="fw-light ms-3">{{ $project->descrip }}</h5>
                    <hr>
                    <h5><span class="">Start Date:</h5>
                    <hr>
                    <h5><span class="fw-light ms-3">{{ $project->start_date }}</h5>
                    <hr>
                    <h5> <span class="">End Date:</h5>
                    <hr>
                    <h5><span class="fw-light ms-3">{{ $project->end_date }}</h5>
                </div>
                @include('teammembers.index')
                @include('tasks.index')
            </div>
        </div>
    </div>
@endsection

<style>

</style>
