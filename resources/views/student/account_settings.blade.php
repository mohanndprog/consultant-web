@extends('layouts.student.student_layout')

@section('title', 'Account Settings')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="page-heading">
                <h2>Account Setting</h2>
            </div>
            <div class="row align-items-center">
                <form class="profile-setting-form" method="POST" action="{{ route('studentUpdateInfo') }}">
                    @csrf

                    <h4>Personal Information</h4>

                    @if (Session::get('success'))
                    <div class=" alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ Auth::user()->name }}" name="name">
                            <span class="invalid-feedback">@error('name') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ Auth::user()->email }}" name="email">
                            <span class="invalid-feedback">@error('email') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <input type="password" class="form-control @error('newpassword') is-invalid @enderror"
                                id="newpassword" name="newpassword" placeholder="Enter a new password">
                            <span class="invalid-feedback">@error('newpassword'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" id="newpassword_confirmation"
                                name="newpassword_confirmation" placeholder="Confirm new password">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary account-setting-btn">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection