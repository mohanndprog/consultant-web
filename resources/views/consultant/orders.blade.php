@extends('layouts.consultant.consultant_layout')

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
                                <th scope="col">Booked By</th>
                                <th scope="col">Order Id</th>
                                <th scope="col">Order Amount</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Order Status</th>
                                <th scope="col">Meeting Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->order_id }}</td>
                                <td>{{ $order->orderPrice ? $order->orderPrice->order_charges : "N/A" }}</td>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->order_status }}</td>
                                @if($order->order_status == "completed")
                                    <td>Meeting Completed</td>
                                @else
                                    <td>
                                        <a target="_blank" href="/consultant/join/{{ $order->meeting_id == true ? $order->meeting_id : "N/A" }}">
                                            Meeting Link
                                        </a>
                                    </td>
                                @endif
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
