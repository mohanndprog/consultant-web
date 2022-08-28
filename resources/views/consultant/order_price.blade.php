@extends('layouts.consultant.consultant_layout')

@section('title', 'Order Price')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="row align-items-center">
                <div class="page-heading">
                    <h2>Order Price</h2>

                    <div class="results">
                        @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="add-price-btn">
                    <button class="add-price" data-toggle="modal" data-target="#add-price">Add Price</button>
                    <div class="modal fade" id="add-price" role="dialog">
                        <div class="modal-dialog add-price-wrapper">

                            <!-- Modal content-->
                            <div class="modal-content add-price-div">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Price for Meeting session</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('addOrderPrice') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text"
                                                class="form-control @error('order_title') is-invalid @enderror"
                                                name="order_title" id="order_title" required>
                                            <span class="invalid-feedback">
                                                @error('order_title') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input type="text"
                                                class="form-control @error('order_time') is-invalid @enderror" name="
                                                order_time" id="order_time" required>
                                            <span class="invalid-feedback">
                                                @error('order_time') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text"
                                                class="form-control @error('order_charges') is-invalid @enderror"
                                                name="order_charges" id="order_charges" required>
                                            <span class="invalid-feedback">
                                                @error('order_charges') {{ $message }} @enderror</span>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="user-table">
                    <table class="table table-hover table-responsive">
                        <thead>
                            <th scope="col">S/N</th>
                            <th scope="col">Consultant Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Time</th>
                            <th scope="col">Charges</th>
                            <th scope="col">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($orderPrice as $list)
                            <tr>
                                <td scope="col">{{ $list->id }}</td>
                                <td scope="col">{{ $list->user->name }}</td>
                                <td scope="col">{{ $list->order_title }}</td>
                                <td scope="col">{{ $list->order_time }}</td>
                                <td scope="col">{{ $list->order_charges }}</td>
                                <td scope="col">
                                    <div class="action-btn edit">
                                        <i class="fas fa-edit btn-order-edit" data-toggle="modal"
                                            data-target="#editPrice{{ $list->id }}"></i>
                                    </div>
                                    <div class="action-btn">
                                        <a href="/consultant/delete-order/{{ $list->id }}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <div class="row align-items-center">
                        <!-- Modal -->
                        @foreach ($orderPrice as $editModal)
                        <div class="modal fade" id="editPrice{{ $editModal->id }}" role="dialog">
                            <div class="modal-dialog add-price-wrapper">

                                <!-- Modal content-->
                                <div class="modal-content add-price-div">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Price for Meeting session</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('updateOrderPrice') }}">
                                            @csrf
                                            <input type="hidden" name="cid" value="{{ $editModal->id }}">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text"
                                                    class="form-control @error('order_title') is-invalid @enderror"
                                                    name="order_title" value="{{ $editModal->order_title }}" required>
                                                <span class="invalid-feedback">
                                                    @error('order_title') {{ $message }} @enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Time</label>
                                                <input type="text"
                                                    class="form-control @error('order_time') is-invalid @enderror"
                                                    name="order_time" value="{{ $editModal->order_time }}" required>
                                                <span class="invalid-feedback">
                                                    @error('order_time') {{ $message }} @enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text"
                                                    class="form-control @error('order_charges') is-invalid @enderror"
                                                    name="order_charges" value="{{ $editModal->order_charges }}"
                                                    required>
                                                <span class="invalid-feedback">
                                                    @error('order_charges') {{ $message }} @enderror</span>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
