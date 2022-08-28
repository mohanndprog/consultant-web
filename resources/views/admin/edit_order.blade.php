@extends('layouts.admin.admin_layout')

@section('title', 'Edit Order')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="page-heading">
                <h2>Edit Order</h2>
            </div>
            <div class="row align-items-center">
                <form class="profile-setting-form" method="POST" action="{{ route('admin.update-order') }}">
                    @csrf

                    <input type="hidden" name="order_id" value="{{ $order->id }}">

                    <h4>Personal Information</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="order_title">Order Title</label>
                            <input type="text" class="form-control @error('order_title') is-invalid @enderror" id="order_title"
                                value="{{ $order->order_title }}" name="order_title">
                            <span class="invalid-feedback">@error('order_title') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="order_time">Order Time</label>
                            <input type="text" class="form-control @error('order_time') is-invalid @enderror"
                                id="order_time" value="{{ $order->order_time }}" name="order_time">
                            <span class="invalid-feedback">@error('order_time') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="order_charges">Order Charges</label>
                            <input type="text" class="form-control @error('order_charges') is-invalid @enderror" id="order_charges"
                                value="{{ $order->order_charges }}" name="order_charges">
                            <span class="invalid-feedback">@error('order_charges') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary account-setting-btn">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection