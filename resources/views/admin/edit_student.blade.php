@extends('layouts.admin.admin_layout')

@section('title', 'Edit Student Settings')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="page-heading">
                <h2>Edit Student Setting</h2>
            </div>
            <div class="row align-items-center">
                <form class="profile-setting-form" method="POST" action="{{ route('admin.student-update') }}"
                    enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="student_id" value="{{ $student->id }}">

                    <h4>Personal Information</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName"
                                value="{{ $student->name }}" name="name">
                            <span class="invalid-feedback">@error('name') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="inputEmail" value="{{ $student->email }}" name="email">
                            <span class="invalid-feedback">@error('email') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary account-setting-btn">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection