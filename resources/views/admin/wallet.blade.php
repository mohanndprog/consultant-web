@extends('layouts.admin.admin_layout')

@section('title', 'Wallet')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="row align-items-center">
                <div class="page-heading">
                    <h2>Wallet</h2>
                </div>
                <div class="my-wallet">
                    <div class="wallet d-flex">
                        <div class="wallet__media">
                            <img src="{{ asset('admin/images/wallet.PNG') }}" class="img-fluid" />
                        </div>
                        <div class="wallet__content">
                            <span>Wallet Balance</span>
                            <h3>$657.78</h3>
                        </div>
                    </div>
                    <div class="wallet-payment-method">
                        <div class="withdrawal-payment">
                            <button class="money-transfer-btn" data-toggle="modal" data-target="#withdrawal-money">Request Withdrawal</button>
                            <div class="row align-items-center">
                                <!-- Modal -->
                                <div class="modal fade" id="withdrawal-money" role="dialog">
                                    <div class="modal-dialog wallet-model">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Request Withdrawal</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label>Enter Amount To Be Withdrawal [USD]</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary add-payment-btn">Conform</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-table">
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Order Id</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Order Net Amount</th>
                                <th scope="col">Earning</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="col">1</th>
                                <th scope="col">3</th>
                                <th scope="col">2020-11-27</th>
                                <th scope="col">$250</th>
                                <th scope="col">$50</th>
                            </tr>
                            <tr>
                                <th scope="col">1</th>
                                <th scope="col">3</th>
                                <th scope="col">2020-11-27</th>
                                <th scope="col">$250</th>
                                <th scope="col">$50</th>
                            </tr>
                            <tr>
                                <th scope="col">1</th>
                                <th scope="col">3</th>
                                <th scope="col">2020-11-27</th>
                                <th scope="col">$250</th>
                                <th scope="col">$50</th>
                            </tr>
                            <tr>
                                <th scope="col">1</th>
                                <th scope="col">3</th>
                                <th scope="col">2020-11-27</th>
                                <th scope="col">$250</th>
                                <th scope="col">$50</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
