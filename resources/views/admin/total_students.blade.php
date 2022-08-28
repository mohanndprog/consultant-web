@extends('layouts.admin.admin_layout')

@section('title', 'Total Students')

@section('content')


<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="row align-items-center">
                <div class="page-heading">
                    <h2>Total Students</h2>
                </div>
                <div class="user-table">
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">User Type</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($totalStudent as $total)
                            <tr>
                                <td>{{ $total->id }}</td>
                                <td>{{ $total->name }}</td>
                                <td>{{ $total->email }}</td>
                                <td>{{ $total->role }}</td>
                                <td>
                                    <a href="{{ route('admin.student-edit', $total->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.student-delete', $total->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
