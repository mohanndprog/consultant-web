@extends('layouts.admin.admin_layout')

@section('title', 'Orders')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="row align-items-center">
                <div class="page-heading">
                    <h2>Orders</h2>
                </div>
                <div class="user-table">
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Booked By</th>
                                <th scope="col">Lesson Date & Time</th>
                                <th scope="col">Status</th>
                                <th scope="col">Price</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allBook as $total)
                            <tr>
                                <th>{{ $total->id }}</th>
                                <td>{{ $total->order_id }}</td>
                                <td>{{ $total->user->name }}</td>
                                <td>{{ $total->order_date }}</td>
                                <td>{{ $total->order_status }}</td>
                                <td>{{ $total->order_charges }}</td>
                                <td>
                                    <a href="{{ route('admin.edit-order', $total->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.delete-order', $total->id) }}" class="btn btn-danger">Delete</a>
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
