@extends('layout.layout')

@section('home')
    <div class=" d-flex flex-column align-items-center justify-content-center" style="height: 100vh">
        <h1 class="mb-5 poppins-semibold">Project Management System</h1>
        <a class="btn btn-dark btn-lg px-5 py-3" href="{{ route('projects.index') }}">START NOW</a>
    </div>
@endsection

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    .poppins-semibold {
        font-family: "Poppins", system-ui;
        font-weight: 600;
        font-style: normal;
        font-size: 80px
    }
</style>
