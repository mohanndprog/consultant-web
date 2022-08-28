@extends('layouts.student.student_layout')

@section('title', 'Group Classes')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="row align-items-center">
                <div class="page-heading">
                    <h2>Group Classes</h2>
                </div>
                <div class="user-table">
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Class Title</th>
                                <th scope="col">Max Seats</th>
                                <th scope="col">Booked Seats</th>
                                <th scope="col">Entry Fee</th>
                                <th scope="col">Start At</th>
                                <th scope="col">End AT</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="col">1</th>
                                <th scope="col">Definite and Indefinite Articles in French</th>
                                <th scope="col">10</th>
                                <th scope="col">2</th>
                                <th scope="col">$10.00</th>
                                <th scope="col">2021-05-02 02:00:00</th>
                                <th scope="col">2021-05-02 03:00:00</th>
                                <th scope="col">Active</th>
                            </tr>
                            <tr>
                                <th scope="col">1</th>
                                <th scope="col">Definite and Indefinite Articles in French</th>
                                <th scope="col">10</th>
                                <th scope="col">2</th>
                                <th scope="col">$10.00</th>
                                <th scope="col">2021-05-02 02:00:00</th>
                                <th scope="col">2021-05-02 03:00:00</th>
                                <th scope="col">Active</th>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
