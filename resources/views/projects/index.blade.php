@extends('layout.layout')

@section('projects')
    <div class="container">
        <h1 class="my-5">PROJECTS</h1>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3 mb-sm-0 ">
                <div class="card" style="height: 300px;">
                    <a class="d-flex flex-column justify-content-center align-items-center card-body text-decoration-none  bg-secondary"
                        href="{{ route('projects.create') }}">
                        <h3>Add new project</h3>
                        <svg class="w-25 h-25 img-fluid" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                        </svg>
                    </a>
                </div>
            </div>

            @foreach ($projects as $project)
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3 mb-sm-0">
                    <div class="card" style="height: 300px;">
                        <a class="d-flex flex-column justify-content-between card-body text-decoration-none"
                            href="{{ route('projects.show', $project->id) }}">
                            <div>
                                <h3>{{ $project->project_name }}</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis,
                                    provident?</p>
                            </div>

                            <div class="p-3">
                                <a class="btn btn-primary" href="{{ route('projects.edit', $project->id) }}"
                                    style="width: 30%"> Edit</a>
                                <form class="d-inline" action="{{ route('projects.destroy', $project->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="width: 30%">Delete</button>
                                </form>
                            </div>

                        </a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection

<style>

</style>
