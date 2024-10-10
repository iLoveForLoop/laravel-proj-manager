@extends('layout.layout')

@section('member-create')
    <div class="container p-5 poppins">
        <div class="row d-flex justify-content-center">
            <div class="col-6 border border-3 border-secondary p-5">
                <h1 class="text-center">Edit Member</h1>
                <form action="{{ route('teammembers.update', $member->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="fname" class="form-label text-left">First Name</label>
                        <input value="{{ $member->first_name }}" name='first_name' type="text" class="form-control"
                            id="fname" placeholder="Enter first name" required>
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label text-left">Last Name</label>
                        <input value="{{ $member->last_name }}" name='last_name' type="text" class="form-control"
                            id="lname" placeholder="Enter last name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-left">Email</label>
                        <input value="{{ $member->email }}" name='email' type="email" class="form-control"
                            id="email" placeholder="Enter an email" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-md py-2 px-5">Update</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection
