@extends('layouts.admin.admin_layout')

@section('title', 'Add Subjects of Consultation')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="row align-items-center">
                <div class="page-heading">
                    <h2>Add Subjects of Consultation</h2>
                </div>
                <div class="add-subject-btn">
                    <button class="add-subject" data-toggle="modal" data-target="#add-price">Add Subject</button>
                    <div class="modal fade" id="add-price" role="dialog">
                        <div class="modal-dialog add-price-wrapper">

                            <!-- Modal content-->
                            <div class="modal-content add-price-div">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Subject of Consultation</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('addNewSubject') }}"
                                        id="addSubjectOfConsultation">
                                        @csrf
                                        <div class=" form-group">
                                            <label>Subject Name</label>
                                            <input type="text" name="course_name"
                                                class="form-control @error('course_name') is-invalid @enderror"
                                                required>
                                            <span class="invalid-feedback">
                                                @error('course_name') {{ $message }} @enderror</span>
                                        </div>
                                        <div class=" form-group">
                                            <label>Add Image</label>
                                            <input type="file" name="image"
                                                class="form-control @error('image') is-invalid @enderror"
                                                required>
                                            <span class="invalid-feedback">
                                                @error('image') {{ $message }} @enderror</span>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="user-table">
                    <div class="subject-section">
                        <h2>Subjects</h2>
                        <ul>
                            @foreach ($allCourses as $course)
                            <div class="subject-{{ $course->id }}">
                                <li>{{ $course->course_name }} <span><i subject="{{ $course->id }}"
                                            class="fas fa-times-circle btn-subject-remove"></i></span></li>
                            </div>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection()