<!DOCTYPE html>
<html lang="en">

<head>
    <title>Consultation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('consultant/css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/language.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<header>
    <div class="logo">
        <a href="/"><img src="{{ asset('images/logo.PNG') }}" class="img-fluid"></a>
    </div>
    <div class="main-nav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="group-classes.html">Group Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('searchConsultants') }}">Find Consultants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('apply-to-teach') }}">Apply to teach</a>
                    </li>

                    @include('layouts.auth-check')

                </ul>
            </div>
        </nav>
    </div>

</header>

<section class="profile-section">
    <div class="container container--fixed">
        <div class="profile-cover">
            <div class="profile-head">
                <div class="detail-wrapper">
                    <div class="profile__media">
                        <div class="avtar avtar--xlarge">
                            <img src="/profile/{{ $consultant->consultant->image }}" class="img-fluid">
                        </div>

                    </div>
                    <div class="profile-detail">
                        <div class="profile-detail__head">
                            <div class="tutor-name">
                                <h4>{{ $consultant->name }}</h4>
                            </div>
                        </div>
                        <div class="profile-detail__body">
                            <div class="info-wrapper">
                                <div class="info-tag location">
                                    <i class="fa fa-map-marker icon icon--location" aria-hidden="true"></i>
                                    <span class="lacation__name"> {{ $consultant->consultant->country }}</span>
                                </div>
                                <div class="info-tag ratings">
                                    <i class="fa fa-star icon icon--rating" aria-hidden="true"></i>
                                    <span class="value">{{ $consultant->reviews }}</span>
                                    <span class="count">({{ $consultant->studentReviewed }})</span>
                                </div>
                                <div class="info-tag list-count">
                                    <div class="total-count">
                                        <span class="value">{{ $consultant->studentCount }}</span>
                                        Students
                                    </div>
                                </div>
                            </div>
                            <div class="tutor-lang">
                                <b>Teaches:</b>
                                @foreach ($consultant->courses as $courseDetail)
                                    <ul>
                                        {{ $courseDetail->course_name }}
                                    </ul>
                                @endforeach
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-primary">
                <div class="panel-cover">
                    <div class="panel-cover__head panel__head-trigger panel__head-trigger-js">
                        <h3>About {{ $consultant->name }}</h3>
                    </div>
                    <div class="panel-cover__body panel__body-target panel__body-target-js">
                        <div class="content__row">
                            <p>{{ $consultant->consultant->bio }}</p>
                        </div>
                    </div>
                </div>
                <div class="panel-cover" id="lessons-prices">
                    <div class="panel-cover__head panel__head-trigger panel__head-trigger-js">
                        <h3>Lessons Prices</h3>
                    </div>
                    <div class="panel-cover__body panel__body-target panel__body-target-js">
                        <div class="panel-head__right">
                            <label for="course-selector">Select Topic</label>
                            <div class="select--box">
                                <select id="course-selector">
                                    @if(count($consultant->courses) > 0)
                                        @foreach($consultant->courses as $courseDetail)
                                            <option value="{{ $courseDetail->id }}">
                                                {{ $courseDetail->course_name }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option disabled>No Courses Found!</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="lessons-cards-section">
                            @if(count($consultant->orderPrice) > 0)
                                @foreach ($consultant->orderPrice as $order)
                                    <div class="lesson-card-wrapper">
                                        <div class="lesson-card">
                                            <div class="card__head">
                                                <div class="card__title">
                                                    <h4 class="color-primary">{{ $order->order_title }} Lessons
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="card__body">
                                                <div class="lesson-slot-info">
                                                    <ul>
                                                        <li>
                                                            <div class="tp-wrapper">
                                                                <div class="lesson lesson--time">
                                                                    {{$order->order_time}}
                                                                </div>
                                                                <div class="space">_____</div>
                                                                <div class="lesson lesson--price" name="order_amount"
                                                                     id="order_amount">
                                                                    {{$order->order_charges}}
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="lesson-card-wrapper">
                                    <div class="lesson-card">
                                        <div class="card__head">
                                            <div class="card__title">
                                                <h4 class="color-primary">
                                                    No orders found!
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="panel-cover panel--calendar">
                    <div class="panel-cover__head panel__head-trigger panel__head-trigger-js">
                        <h3>Schedule</h3>
                    </div>
                    <div class="panel-cover__body panel__body-target panel__body-target-js">
                        <div class="calendar-wrapper">
                            <div class="calendar-wrapper__body">
                                <div class="calendar-view">
                                    <div class="calendar-view__head">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h4>{{ $consultant->name }}'s Calendar</h4>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="cal-status">
                                                    <span class="ml-0 box-hint disabled-box"></span>
                                                    <p>Not Available</p>
                                                </div>
                                                <div class="cal-status">
                                                    <span class="box-hint available-box"></span>
                                                    <p>Available</p>
                                                </div>
                                                <div class="cal-status">
                                                    <span class="box-hint booked-box"></span>
                                                    <p>Booked</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note note--secondary mb-5">
                                        <i class="fa fa-exclamation-triangle icon icon--explanation"
                                           aria-hidden="true"></i>
                                        <p>
                                            <b>Note: </b>
                                            Calendar Is To Only Check Availability
                                        </p>
                                    </div>
                                    <div class="calender-section">
                                        <div class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
                                            <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                                                <div class="fc-toolbar-chunk">
                                                    <h6>
                                                        <span>My Current Time :-</span>
                                                        <span class="timer">11:06:49 PM</span>
                                                        <span class="timezoneoffset">(UTC +05:00)</span>
                                                    </h6>
                                                </div>
                                                <div class="fc-toolbar-chunk">
                                                    <h2 class="fc-toolbar-title">SEP 26 – OCT 02, 2021</h2>
                                                </div>
                                                <div class="fc-toolbar-chunk">
                                                    <div class="fc-button-group">
                                                        <button class="fc-prev-button fc-button fc-button-primary"
                                                                type="button" aria-label="prev">
                                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="fc-next-button fc-button fc-button-primary"
                                                                type="button" aria-label="next">
                                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <button class="fc-today-button fc-button fc-button-primary"
                                                            type="button">Today
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="available-calender-section">
                                            <table style="width:100%">
                                                <tr>
                                                    <th></th>
                                                    <th>SUN 9/19</th>
                                                    <th>MON 9/20</th>
                                                    <th>TUE 9/21</th>
                                                    <th>WED 9/22</th>
                                                    <th>THU 9/23</th>
                                                    <th>FRI 9/24</th>
                                                    <th>SAT 9/25</th>
                                                </tr>
                                                <tr>
                                                    <td>12:00am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>12:30am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="booked"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>01:00am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="booked"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>01:30am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                </tr>
                                                <tr>
                                                    <td>02:00am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                </tr>
                                                <tr>
                                                    <td>02:30am</td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                </tr>
                                                <tr>
                                                    <td>03:00am</td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                </tr>
                                                <tr>
                                                    <td>03:30am</td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                    <td class="available"></td>
                                                </tr>
                                                <tr>
                                                    <td>04:00am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>04:30am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>05:00am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>05:30am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>06:00am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>06:30am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>07:00am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>07:30am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>08:00am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>08:30am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>09:00am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>09:30am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>10:00am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>10:30am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>11:00am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>11:30am</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>12:00pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>12:30pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>01:00pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>01:30pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>02:00pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>02:30pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>03:00pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>03:30pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>04:00pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>04:30pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>05:00pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>05:30pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>06:00pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>06:30pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>07:00pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>07:30pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>08:00pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>08:30pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>09:00pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>09:30pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>10:00pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>10:30pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>11:00pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>11:30pm</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="contact-note">
                                        <p>
                                            <b>Note:</b> Not Finding Your Ideal Time?
                                            <a href="#">Contact</a>
                                            This Teacher To Request A Slot Outside Of Their Current Schedule
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-cover">
                    <div class="panel-cover__head panel__head-trigger panel__head-trigger-js">
                        <h3>Teaching Qualifications</h3>
                    </div>
                    <div class="panel-cover__body panel__body-target panel__body-target-js">
                        <div class="row row--resume">
                            <div class="col-xl-4 col-lg-4 col-sm-4">
                                <div class="color-dark">Education</div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-sm-8">
                                <div class="resume-wrapper">
                                    <div class="row">
                                        <div class="col-4 col-sm-4">
                                            <div class="resume__primary">
                                                <b>{{ $consultant->consultant->start_year }}
                                                    - {{ $consultant->consultant->end_year }}</b>
                                            </div>
                                        </div>
                                        <div class="col-7 col-ms-7 offset-1">
                                            <div class="resume__secondary">
                                                <b>Certified in {{ $consultant->consultant->degree }}.</b>
                                                <p>{{ $consultant->consultant->institution }}.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-secondary">
                <div class="right-panel">
                    <div class="dummy-video">
                        <div class="video-media ratio ratio--16by9">
                            <iframe width="100%" height="100%"
                                    src=""></iframe>
                        </div>
                    </div>
                    <div class="-gap"></div>
                    <div class="box box--book">
                        <div class="book__actions">
                            <button type="button" class="btn btn--primary btn--xlarge btn--block color-white"
                                    @if(count($consultant->courses) > 0 && count($consultant->orderPrice) > 0)
                                    data-toggle="modal" data-target="#bookingModel"
                                    @else disabled style="cursor: not-allowed" @endif>
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade bookingModel" id="bookingModel">
                <div class="modal-dialog bookingModel-dialog" role="document">
                    <div class="modal-content bookingModel-content">
                        <div class="modal-header bookingModel-header">
                            <h5 class="modal-title" id="exampleModalLabel">Book Your Consultant</h5>
                            <button type="button" class="close bookingModel-close" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body bookingModel-body">
                            <div class="row">
                                <form class="booking-content-form col-xl-8 col-lg-8 col-md-8 col-sm-12"
                                      action="{{ route('studentBookOrder') }}" method="POST">
                                    @csrf
                                    <div class="booking-content-form-div">
                                        <h3>Select Your Consultation Subject</h3>
                                        @if(count($consultant->courses) > 0)
                                            @foreach ($consultant->courses as $index => $course)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="course"
                                                           value="{{ $course->id }}" id="{{ $course->id }}"
                                                           @if($index == 0) checked @endif>
                                                    <label class="form-check-label" for="{{ $course->id }}">
                                                        {{ $course->course_name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        @else
                                            No courses found!
                                        @endif
                                    </div>
                                    <div class="booking-content-form-div">
                                        <h3>Select Your Order</h3>
                                        @if(count($consultant->orderPrice) > 0)
                                            @foreach ($consultant->orderPrice as $index => $order)
                                                <div class="form-check booking-slot">
                                                    <input class="form-check-input" type="radio" name="order"
                                                           id="{{ $order->id }}" value="{{ $order->id }}"
                                                           @if($index == 0) checked @endif>
                                                    <label class="form-check-label" for="{{ $order->id }}">
                                                        {{ $order->order_time }} - {{ $order->order_charges }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="form-check booking-slot">
                                                <input class="form-check-input" type="radio" name="order_amount"
                                                       id="no-orders-found" disabled>
                                                <label class="form-check-label" for="no-orders-found">
                                                    No Orders Found!
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="booking-content-form-div">
                                        <h3>Select Date & Time</h3>
                                        <div class="form-group">
                                            <input type="datetime-local" class="form-control" name="order_date" required>
                                        </div>
                                    </div>
                                    <div class="booking-content-form-div">
                                        <h3>Payment Method</h3>
                                        <div class="form-check booking-slot">
                                            <input class="form-check-input" type="radio" id="mada" name="payment-method" value="mada">
                                            <label class="form-check-label" for="mada">Mada Pay</label>
                                        </div>

                                        <div class="mada payform" style="display: none">

                                            <br>

                                            <input type="hidden" name="callback_url"
                                                value="{{ url(route('payment.callback', [$consultant->id])) }}" />
                                            <input type="hidden" name="amount" value="{{ $order->order_charges }}" />
                                            <input type="hidden" name="source[type]" value="creditcard" />
                                            <input type="hidden" name="description"
                                                value="Order ID: {{ $order->id }} and Booked by: {{ Auth::user() ? Auth::user()->name : 'User' }}" >

                                            <div class="form-group">
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Your Name" value="{{ old('name') }}" />
                                                <span class="invalid-feedback">@error('name') {{ $message }} @enderror</span>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control number @error('number') is-invalid @enderror" name="number" id="number" placeholder="Card Number" />
                                                <span class="invalid-feedback">@error('number') {{ $message }} @enderror</span>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-4">
                                                    <input type="text" class="form-control month @error('month') is-invalid @enderror" name="month" id="month" placeholder="Expire Month">
                                                    <span class="invalid-feedback">@error('month') {{ $message }} @enderror</span>
                                                </div>

                                                <div class="form-group col-4">
                                                    <input type="text" class="form-control year @error('year') is-invalid @enderror" name="year" id="year" placeholder="Expire Year" />
                                                    <span class="invalid-feedback">@error('year') {{ $message }} @enderror</span>
                                                </div>

                                                <div class="form-group col-4">
                                                    <input type="text" class="form-control cvc @error('cvc') is-invalid @enderror" name="cvc" id="cvc" placeholder="Your CVC" />
                                                    <span class="invalid-feedback">@error('cvc') {{ $message }} @enderror</span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-check booking-slot">
                                            <input class="form-check-input" type="radio" name="payment-method" id="apple" value="apple">
                                            <label class="form-check-label" for="apple">Apple Pay</label>
                                        </div>

                                        <br>

                                        <div class="apple payform col-5" style="display: none">
                                            <div class="form-group">
                                                <button class="form-control btn btn-dark">Apple Pay Button</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bookingModel-footer">
                                        <button type="submit" class="btn btn--primary">Confirm</button>
                                    </div>
                                </form>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class="booking-content-form-div order-summery-section">
                                        <h3>Order Summery</h3>
                                        <div class="order-summery">
                                            <div class="order-summery-div">
                                                <h6>Consultation Subject:</h6>
                                                <span id="selected-course">
                                                    @if(count($consultant->courses) > 0)
                                                        {{ $consultant->courses[0]->course_name }}
                                                    @else
                                                        N/A
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="order-summery-div">
                                                <h6>Order Slot:</h6>
                                                <span id="selected-order">
                                                    @if(count($consultant->orderPrice) > 0)
                                                        {{ $consultant->orderPrice[0]->order_time }}
                                                        - {{ $consultant->orderPrice[0]->order_charges }}
                                                    @else
                                                        N/A
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="order-summery-div">
                                                <h6>Payment Method:</h6>
                                                <span id="selected-payment-method">Mada Pay</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <section class="section--footer">
        <div class="container container--narrow">
            <div class="row footer--row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-group toggle-group">
                        <div class="footer__group-title toggle-trigger-js">
                            <h5>Support</h5>
                        </div>
                        <div class="footer__group-content toggle-target-js">
                            <div class="bullet-list">
                                <ul class="footer_contact_details">
                                    <li>
                                        <i class="fa fa-envelope icon icon--email" aria-hidden="true"></i>
                                        <span><a href="mailto:sales@fatbit.com">sales@fatbit.com</a></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone icon icon--phone" aria-hidden="true"></i>
                                        <span>Call Us:<a href="tel:+91 95555 96666"> +91 95555 96666</a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-group toggle-group">
                        <div class="footer__group-title toggle-trigger-js">
                            <h5>Contact</h5>
                        </div>
                        <div class="footer__group-content toggle-target-js">
                            <div class="bullet-list">
                                <ul class="footer_contact_details">
                                    <li>
                                        <i class="fa fa-map-marker icon icon--pin" aria-hidden="true"></i>
                                        <span><a href="https://g.page/FATbit?share">A-712, FATbit Technologies,
                                                    Bestech Business Towers, Mohali, Punjab, India</a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-group toggle-group">
                        <div class="footer__group-title toggle-trigger-js">
                            <h5>Social</h5>
                        </div>
                        <div class="footer__group-content toggle-target-js">
                            <div class="bullet-list">
                                <ul class="footer_social-links">
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="images/facebook-icon.png" class="img-fluid">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="images/twitter-icon.png" class="img-fluid">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="images/insta-icon.png" class="img-fluid">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="images/pintrest-icon.png" class="img-fluid">
                                            <span>Pintrest</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="images/youtube-icon.png" class="img-fluid">
                                            <span>Youtube</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-group toggle-group">
                        <div class="footer__group-title toggle-trigger-js">
                            <h5>Language & Currency</h5>
                        </div>
                        <div class="footer__group-content toggle-target-js">
                            <div class="bullet-list">
                                @include('language')
                                <div class="settings-group">
                                    <div class="settings toggle-group">
                                        <form>
                                            <div class="form-group">
                                                <select class="form-control" id="exampleFormControlSelect3">
                                                    <option>USD</option>
                                                    <option>EUR</option>
                                                    <option>Rs</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer--row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-group toggle-group">
                        <div class="footer__group-title toggle-trigger-js">
                            <h5>Support</h5>
                        </div>
                        <div class="footer__group-content toggle-target-js">
                            <div class="bullet-list">
                                <ul>
                                    <li>
                                        <a href="#" class="bullet-list__action">About</a>
                                    </li>
                                    <li>
                                        <a href="#" class="bullet-list__action">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="#" class="bullet-list__action">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-group toggle-group">
                        <div class="footer__group-title toggle-trigger-js">
                            <h5>Other</h5>
                        </div>
                        <div class="footer__group-content toggle-target-js">
                            <div class="bullet-list">
                                <ul>
                                    <li>
                                        <a href="#" class="bullet-list__action">Apply to Teach</a>
                                    </li>
                                    <li>
                                        <a href="#" class="bullet-list__action">Terms and Conditions</a>
                                    </li>
                                    <li>
                                        <a href="#" class="bullet-list__action">Privacy And Policy</a>
                                    </li>
                                    <li>
                                        <a href="#" class="bullet-list__action">Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-group toggle-group">
                        <div class="footer__group-title toggle-trigger-js">
                            <h5>Signup To Newsletter</h5>
                        </div>
                        <div class="footer__group-content toggle-target-js">
                            <div class="email-field">
                                <input type="email" name="email" placeholder="Enter Email">
                                <i class="fa fa-envelope icon icon--envelope" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer--row">
                <div class="col-md-12">
                    <div class="footer-group toggle-group">
                        <div class="footer__group-title toggle-trigger-js">
                            <h5>Consultation topics</h5>
                        </div>
                        <div class="footer__group-content toggle-target-js">
                            <div class="footer__group-tag">
                                <div class="tags-inline__item">
                                    <a href="#">Sports</a>
                                </div>
                                <div class="tags-inline__item">
                                    <a href="#">Business</a>
                                </div>
                                <div class="tags-inline__item">
                                    <a href="#">Medical</a>
                                </div>
                                <div class="tags-inline__item">
                                    <a href="#">Health</a>
                                </div>
                                <div class="tags-inline__item">
                                    <a href="#">Family</a>
                                </div>
                                <div class="tags-inline__item">
                                    <a href="#">Marriage</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-copyright">
        <div class="container container--narrow">
            <div class="copyright">
                <div class="footer__logo">
                    <img src="{{ asset('images/logo.PNG') }}" class="img-fluid">
                </div>
                <p>
                    Copyright © 2021 <a href="#">Yo!Coach</a> Developed by <a href="#"
                                                                              class="underline color-primary">SahaSol</a>
                </p>
            </div>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('Js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Js/language.js') }}"></script>
<script src="{{ asset('student/js/custom.js') }}"></script>
<script src="{{ asset('Js/toastr.js') }}"></script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

<script>
    function showRegistrationDropdown() {
        let x = document.getElementById("showRegistrationDropdown");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>

@if (Session::get('success'))
<script>
    toastr.success("{!! Session::get('success') !!}");
</script>
@elseif (Session::get('error'))
<script>
    toastr.error("{!! Session::get('error') !!}");
</script>
@endif

</body>

</html>
