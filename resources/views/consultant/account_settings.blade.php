@extends('layouts.consultant.consultant_layout')

@section('title', 'Account Settings')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="page-heading">
                <h2>Account Setting</h2>
            </div>
            <div class="row align-items-center">
                <form class="profile-setting-form" method="POST" action="{{ route('consultantUpdateInfo') }}"
                    enctype="multipart/form-data">
                    @csrf

                    @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    <h4>Personal Information</h4>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName"
                                value="{{ Auth::user()->name }}" name="name">
                            <span class="invalid-feedback">@error('name') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="inputEmail" value="{{ Auth::user()->email }}" name="email">
                            <span class="invalid-feedback">@error('email') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                value="{{ $consultant->consultant->phone }}" name="phone" id="phone">
                            <span class="invalid-feedback">@error('phone') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="newpassword">Password</label>
                            <input type="password" class="form-control @error('newpassword') is-invalid @enderror"
                                id="newpassword" name="newpassword" placeholder="Enter a new password">
                            <span class="invalid-feedback">@error('newpassword'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="newpassword_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="newpassword_confirmation"
                                name="newpassword_confirmation" placeholder="Confirm new password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="country">Country</label>
                            <input type="text" id="country" class="form-control @error('country') is-invalid @enderror"
                                value="{{ $consultant->consultant->country }}" name="country">
                            <span class="invalid-feedback">@error('country') {{ $message }} @enderror</span>
                        </div>
                    </div>

                    <h4>Add Profile Photo and Biography</h4>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <div class="profile-picture">
                                <img alt="avatar" id="avatar" src="/profile/{{ $consultant->consultant->image }}">
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Profile Picture</label>
                            <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">
                            <span class="invalid-feedback">@error('image') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="text-area">Bio</label>
                            <textarea name="bio" rows="4" class="form-control @error('bio') is-invalid @enderror"
                                id="text-area">{{ $consultant->consultant->bio }}</textarea>
                            <span class="invalid-feedback">@error('bio') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="colum-layout">
                                <div class="colum-layout__cell">
                                    <div class="colum-layout__head">
                                        <span>Subjects of Consultation</span>
                                    </div>
                                    <div class="colum-layout__body">
                                        @foreach ($allCourses as $course)
                                        <div class="selection">
                                            <div class="subject-div">
                                                <h5>{{ $course->course_name }}</h5>
                                            </div>
                                            <input type="checkbox" name="course_name[]" id="course_name"
                                                value="{{ $course->id }}" @if($course['is-selected']==true) checked
                                                @endif class="@error('course_name') is-invalid @enderror">
                                            <span class="invalid-feedback">@error('course_name') {{ $message }}
                                                @enderror</span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary account-setting-btn">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection