@extends('layout.layout')

@section('home')
    <div class=" d-flex flex-column align-items-center justify-content-center" style="height: 100vh">
        <h1 class="mb-5 poppins-semibold">Project Management System</h1>
        <a class="btn btn-dark btn-lg px-5 py-3" href="{{ route('projects.index') }}">START NOW</a>
    </div>
@endsection

<style>

</style>
