@extends('layouts.admin.admin_layout')

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
                    <a href="{{ route('admin.totaConsultants') }}" class="stat">
                        <div class="stat__amount">
                            <span>Total Consultants</span>
                            <h5>{{ $consultant->count('id') }}</h5>
                        </div>
                        <div class="stat__media">
                            <img src="{{ asset('admin/images/users.PNG') }}" class="img-fluid" />
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="{{ route('admin.totalStudents') }}" class="stat">
                        <div class="stat__amount">
                            <span>Total Students</span>
                            <h5>{{ $student->count('id') }}</h5>
                        </div>
                        <div class="stat__media">
                            <img src="{{ asset('admin/images/users.PNG') }}" class="img-fluid" />

                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="{{ route('admin.orders') }}" class="stat">
                        <div class="stat__amount">
                            <span>Total Orders</span>
                            <h5>{{ $studentOrder->count('id') }}</h5>
                        </div>
                        <div class="stat__media">
                            <img src="{{ asset('admin/images/orders.PNG') }}" class="img-fluid" />
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="{{ route('admin.classes') }}" class="stat">
                        <div class="stat__amount">
                            <span>Group Classes</span>
                            <h5>10</h5>
                        </div>
                        <div class="stat__media">
                            <img src="{{ asset('admin/images/orders.PNG') }}" class="img-fluid" />

                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="{{ route('admin.wallet') }}" class="stat">
                        <div class="stat__amount">
                            <span>Earning</span>
                            <h5>$511.34</h5>
                        </div>
                        <div class="stat__media">
                            <img src="{{ asset('admin/images/total-earning.PNG') }}" class="img-fluid" />

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection