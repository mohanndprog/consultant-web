@extends('layouts.admin.admin_layout')

@section('title', 'Edit Consultant Settings')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="page-heading">
                <h2>Edit Consultant Setting</h2>
            </div>
            <div class="row align-items-center">
                <form class="profile-setting-form" method="POST" action="{{ route('admin.consultant-update') }}"
                    enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="consultant_id" value="{{ $consultant->id }}">

                    <h4>Personal Information</h4>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName"
                                value="{{ $consultant->name }}" name="name">
                            <span class="invalid-feedback">@error('name') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="inputEmail" value="{{ $consultant->email }}" name="email">
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
                                <img alt="avatar" id="avatar" src="{{ asset('profile/'.$consultant->consultant->image) }}">
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Update Profile Picture</label>
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
                    <button type="submit" class="btn btn-primary account-setting-btn">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection