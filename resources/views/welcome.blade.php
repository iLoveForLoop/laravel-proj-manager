@extends('layout.layout')

@section('home')
    <div class="background-section">
        <div class=" d-flex flex-column align-items-center justify-content-center" style="height: 100vh">
            <h1 class="mb-5 poppins-semibold">Project Management System</h1>
            <a class="btn btn-dark btn-lg px-5 py-3" href="{{ route('projects.index') }}">START NOW</a>
        </div>
    </div>

    <style>
        .background-section {
            background-image: url('/images/newbg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
@endsection
