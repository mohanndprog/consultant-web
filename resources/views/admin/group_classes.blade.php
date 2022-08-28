@extends('layouts.admin.admin_layout')

@section('title', 'Group Classes')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="row align-items-center">
                <div class="page-heading">
                    <h2>Group Classes</h2>
                    <a class="btn btn-success" data-toggle="modal" data-target="#addModal">Add Group Class</a>
                </div>
                <div class="user-table">
                    @if (count($classes) > 0)
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Class Title</th>
                                <th scope="col">Class Description</th>
                                <th scope="col">Max Seats</th>
                                <th scope="col">Booked Seats</th>
                                <th scope="col">Entry Fee</th>
                                <th scope="col">Start At</th>
                                <th scope="col">End AT</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($classes as $key => $class)
                            <tr>
                                <th scope="col">{{ $class->id }}</th>
                                <th scope="col">{{ $class->title }}</th>
                                <th scope="col">{{ $class->description }}</th>
                                <th scope="col">{{ $class->total_seats }}</th>
                                <th scope="col">{{ $class->booked_seats ? $class->booked_seats : 0 }}</th>
                                <th scope="col">$ {{ $class->price }}</th>
                                <th scope="col">{{ $class->start_date }}</th>
                                <th scope="col">{{ $class->end_date }}</th>
                                <th scope="col">{{ $class->status }}</th>
                                <th scope="col">
                                    <div class="action-btn edit">
                                        <i class="fas fa-edit" data-toggle="modal"
                                            data-target="#editModal-{{ $class->id }}"></i>
                                    </div>
                                    <div class="action-btn cancel">

                                        {{-- add onclick delte function --}}
                                        <a href="{{ route('admin.deleteGroupClass', $class->id) }}"
                                            onclick="return confirm('Are you sure you want to delete this item?');">
                                            <i class="fas fa-times-circle"></i>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    No Group Classes Found!!
                    @endif
                </div>

                {{-- Add Modal --}}
                <div class="row align-items-center">
                    <!-- Modal -->
                    <div class="modal fade" id="addModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Group Class</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.createGroupClass') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="4"
                                                required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Max No. Of Learners</label>
                                            <input type="number" name="total_seats" class="form-control" required>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <select class="form-control" name="subject">
                                                        <option value="" selected disabled>Select Subject</option>
                                                        @foreach ($courses as $course)
                                                        <option value="{{ $course->course_name }}">
                                                            {{ $course->course_name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Entry Fee $</label>
                                                    <input type="text" name="price" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Start Time</label>
                                                    <input type="datetime-local" name="start_date" class="form-control"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>End Time</label>
                                                    <input type="datetime-local" name="end_date" class="form-control"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                {{-- Edit Modal --}}
                @foreach($classes as $key => $class)
                <div class="row align-items-center">
                    <!-- Modal -->
                    <div class="modal fade" id="editModal-{{ $class->id }}" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Group Class</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.updateGroupClass') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="cid" value="{{ $class->id }}">

                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ $class->title }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="4" required>
                                                {{ $class->description }}
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Max No. Of Learners</label>
                                            <input type="number" name="total_seats" class="form-control"
                                                value="{{ $class->total_seats }}" required>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <select class="form-control" name="subject">
                                                        @foreach ($courses as $course)
                                                        <option value="{{ $course->course_name }}" @if ($class->subject
                                                            == $course->course_name) selected @endif>
                                                            {{ $course->course_name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Entry Fee $</label>
                                                    <input type="text" name="price" class="form-control"
                                                        value="{{ $class->price }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Start Time</label>
                                                    <input type="datetime-local" name="start_date" class="form-control"
                                                        value="{{ date('Y-m-d\TH:i', strtotime($class->start_date)) }}"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>End Time</label>
                                                    <input type="datetime-local" name="end_date" class="form-control"
                                                        value="{{ date('Y-m-d\TH:i', strtotime($class->end_date)) }}"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning">Update</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection
