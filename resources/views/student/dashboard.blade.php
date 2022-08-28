@extends('layouts.student.student_layout')

@section('title', 'Dashboard')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="page-heading">
                <h2>Dashboard</h2>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="{{ route('student.orders') }}" class="stat">
                        <div class="stat__amount">
                            <span>Orders</span>
                            <h5>{{ $studentOrder->count('id') }}</h5>
                        </div>
                        <div class="stat__media">
                            <img src="{{ asset('student/images/orders.PNG') }}" class="img-fluid" />
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="{{ route('student.classes') }}" class="stat">
                        <div class="stat__amount">
                            <span>Group Classes</span>
                            <h5>13</h5>
                        </div>
                        <div class="stat__media">
                            <img src="{{ asset('student/images/orders.PNG') }}" class="img-fluid" />
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="{{ route('student.wallet') }}" class="stat">
                        <div class="stat__amount">
                            <span>My Wallet</span>
                            <h5>$511.34</h5>
                        </div>
                        <div class="stat__media">
                            <img src="{{ asset('student/images/total-earning.PNG') }}" class="img-fluid" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection