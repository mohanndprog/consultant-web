@extends('layouts.student.student_layout')

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
                                    <th>{{ $order->id }}</th>
                                    <td>{{ $order->order_id }}</td>
                                    <td>{{ $order->orderPrice ? $order->orderPrice->order_charges : "N/A" }}</td>
                                    <td>{{ $order->order_date }}</td>
                                    <td>{{ $order->order_status }}</td>

                                    @if($order->order_status == "completed")
                                        <td>Meeting Completed</td>
                                    @elseif($order->checkOrderDate)
                                        <td>Meeting link not available</td>
                                    @else
                                        <td>
                                            <a target="_blank" href="/student/join/{{ $order->meeting_id == true ? $order->meeting_id : "N/A" }}">
                                                Meeting Link
                                            </a>
                                        </td>
                                    @endif

                                    @if($order->reviewExists && $order->order_status == "completed")
                                        <td>
                                            <button class="btn btn-secondary btn--block">
                                                Already Reviewed
                                            </button>
                                        </td>
                                    @elseif($order->order_status == "completed")
                                    <td>
                                        <button class="btn btn-dark btn--block"
                                            data-toggle="modal" data-target="#reviewModal-{{ $order->id }}">
                                            Leave a review
                                        </button>
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

    @foreach ($orders as $order)
    <div class="modal fade reviewModal" id="reviewModal-{{ $order->id }}">
        <div class="modal-dialog reviewModal-dialog" role="document">
            <div class="modal-content reviewModal-content">
                <div class="modal-header reviewModal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Leave a review</h5>
                    <button type="button" class="close reviewModal-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body reviewModal-body">
                    <div class="row">
                        <form class="booking-content-form col-xl-8 col-lg-8 col-md-8 col-sm-12"
                            action="{{ route('student.addReview') }}" method="POST">
                            @csrf

                            <input type="hidden" name="consultant_id" value="{{ $order->orderPrice->consultant_id }}">
                            <input type="hidden" name="order_id" value="{{ $order->order_id }}">

                            <div class="booking-content-form-div">
                                <label for="rating">Rating out of 5</label>
                                <div class="form-group">
                                    <label>
                                        <input type="radio" name="rating" value="1">
                                        <div></div>
                                    </label>
                                    <label>
                                        <input type="radio" name="rating" value="2">
                                        <div></div>
                                    </label>
                                    <label>
                                        <input type="radio" name="rating" value="3">
                                        <div></div>
                                    </label>
                                    <label>
                                        <input type="radio" name="rating" value="4">
                                        <div></div>
                                    </label>
                                    <label>
                                        <input type="radio" name="rating" value="5">
                                        <div></div>
                                    </label>
                                </div>
                            </div>
                            <div class="booking-content-form-div">
                                <div class="form-group">
                                    <label for="comment">Comment</label>
                                    <textarea class="form-control" name="comment" id="comment" rows="4"
                                        placeholder="Add additional feedback here"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer reviewModal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection
