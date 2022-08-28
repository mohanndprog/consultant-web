@extends('layouts.consultant.consultant_layout')

@section('title', 'Availability Calender')

@section('content')

<div class="tab-content-wrapper inner-content-wraper">
    <div class="custom-container">
        <div class="stats-row margin-bottom-6 align-item-stretch">
            <div class="page-heading">
                <h2>Availability Calender</h2>
            </div>
            <div class="row align-items-center">
                <div class="panel-cover panel--calendar">
                    <div class="panel-cover__body panel__body-target panel__body-target-js">
                        <div class="calendar-wrapper">
                            <div class="calendar-wrapper__body">
                                <div class="calendar-view">
                                    <div class="calendar-view__head">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h4>Caleb Frey Calendar</h4>
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
                                                        type="button">Today</button>
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
            </div>
        </div>
    </div>
</div>

@endsection