<div class="sorting__head">
    <div class="sorting__title">
        @if ($consultants->total() > 0)
            <h4>Found the best {{ $consultants->total() }} teachers for you</h4>
        @else
            <h4>No Teachers Found</h4>
        @endif
    </div>
    <div class="sorting__box">
        <select name="filterSortBy" id="filterSortBy">
            <option value="popularity" @if($sortBy == 'popularity') selected @endif>
                Popularity
            </option>
            <option value="price_asc" @if($sortBy == 'price_asc') selected @endif>
                Price low to high
            </option>
            <option value="price_desc" @if($sortBy == 'price_desc') selected @endif>
                Price high to low
            </option>
        </select>
    </div>
</div>
<div class="listing__body">
    <div class="box-wrapper">
        @foreach ($consultants as $consultant)
            <div class="box box-list">
                <a href="/consultant-profile/{{ $consultant->id }}">
                    <div class="box__primary">
                        <div class="list__head">
                            <div class="list__media ">
                                <div class="avtar avtar--centered">
                                    <a href="/consultant-profile/{{ $consultant->id }}">
                                        <img class="img-fluid" alt="No Image"
                                             src="{{$consultant->consultant !== null ?
                                             asset('profile/' . $consultant->consultant->image) : 'No Image' }}">
                                    </a>
                                </div>
                            </div>
                            <div class="list__price">
                                <p>{{ $consultant->charges }}</p>
                            </div>
                        </div>
                        <div class="list__body">
                            <div class="profile-detail">
                                <div class="profile-detail__head">
                                    <div class="tutor-name"><h4>{{ $consultant->name }}</h4></div>
                                </div>
                                <div class="profile-detail__body">
                                    <div class="info-wrapper">
                                        <div class="info-tag location">
                                            <i class="fa fa-map-marker icon icon--location" aria-hidden="true"></i>
                                            <span class="lacation__name">
                                                {{$consultant->consultant !== null ?
                                            $consultant->consultant->country : 'No Country' }}</span>
                                        </div>
                                        <div class="info-tag ratings">
                                            <i class="fa fa-star icon icon--rating"
                                               aria-hidden="true"></i>
                                            <span class="value">{{ $consultant->reviews }}</span>
                                            <span class="count">({{ $consultant->studentReviewed }})</span>
                                        </div>
                                        <div class="info-tag list-count">
                                            <div class="total-count">
                                                <span class="value">{{ $consultant->studentCount }}</span> Students
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tutor-info">
                                        <div class="tutor-info__inner">
                                            <div class="info__title">
                                                <h6>Teaches</h6>
                                            </div>
                                            <div class="info__language">
                                                <ul>
                                                    @if($consultant->courses != null)
                                                        @foreach($consultant->courses as $courseID => $course)
                                                            <li>{{ $course->course_name }}</li>
                                                        @endforeach
                                                    @else No Course Found @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tutor-info__inner info--about">
                                            <div class="info__title">
                                                <h6>About</h6>
                                            </div>
                                            <div class="about__detail">
                                                <p>{{$consultant->consultant !== null ?
                                                $consultant->consultant->bio : "No Bio" }}</p>
                                                <a href="/consultant-profile/{{ $consultant->id }}">
                                                    View Profile
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list__action">
                            <div class="list__action-btn">
                                <button class="btn btn--primary color-white btn--block"
                                        @if($consultant->courses != null) data-toggle="modal"
                                        data-target="#bookingModel-{{ $consultant->id }}" @else disabled
                                        style="cursor: not-allowed" @endif>
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="box__secondary">
                    <div class="panel-box">
                        <div class="panel-box__head">
                            <div class="nav flex-row nav-pills profile-tabs" id="v-pills-tab"
                                 role="tablist" aria-orientation="horizontal">
                                <a class="nav-link active" id="v-pills-availability-tab"
                                   data-toggle="pill" href="#v-pills-availability" role="tab"
                                   aria-controls="v-pills-availability"
                                   aria-selected="true">Availability</a>
                                <a class="nav-link" id="v-pills-introduction-tab" data-toggle="pill"
                                   href="#v-pills-introduction" role="tab"
                                   aria-controls="v-pills-introduction"
                                   aria-selected="false">Introduction</a>
                            </div>
                        </div>
                        <div class="panel-box__body">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-availability"
                                     role="tabpanel" aria-labelledby="v-pills-availability-tab">
                                    <div class="panel-content calender">
                                        <div class="custom-calendar">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Sun</th>
                                                    <th>Mon</th>
                                                    <th>Tue</th>
                                                    <th>Wed</th>
                                                    <th>Thu</th>
                                                    <th>Fri</th>
                                                    <th>Sat</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @for($i = 00; $i < 24; $i = $i+4)
                                                    <tr>
                                                        @for($j = \Carbon\Carbon::now()->startOfWeek()->subDays(2); $j <= \Carbon\Carbon::now()->endOfWeek()->subDay(); $j->addDay())
                                                            @if($j == \Carbon\Carbon::now()->startOfWeek()->subDays(2))
                                                                <td>
                                                                    <div class="cal-cell">
                                                                        {{ $i >= 10 ? $i : "0" . $i }}
                                                                        - {{ $i + 4 >= 10 ? $i + 4 : "0" . ($i + 4) }}
                                                                    </div>
                                                                </td>
                                                            @else
                                                                @if(is_null($consultant['availability']))
                                                                    <td class="is-hover">
                                                                        <div class="cal-cell cell-green-80"></div>
                                                                        <div class="tooltip tooltip--top bg-black">
                                                                            04:00 Hrs
                                                                        </div>
                                                                    </td>
                                                                @else
                                                                    @if(in_array($j->format("d-m-Y " . $i), array_column($consultant['orderDate'], 'order-time')) == true)
                                                                        @if($consultant['orderDate'][array_search($j->format("d-m-Y " . $i), array_column($consultant['orderDate'], 'order-time'))]['remaining-time'] <= 0)
                                                                            <td class="is-hover">
                                                                                <div class="cal-cell"></div>
                                                                            </td>
                                                                        @else
                                                                            <td class="is-hover">
                                                                                <div
                                                                                    class="cal-cell cell-green-80"></div>
                                                                                <div
                                                                                    class="tooltip tooltip--top bg-black">
                                                                                    {{ date('G:i', mktime(0, $consultant['orderDate'][array_search($j->format("d-m-Y " . $i), array_column($consultant['orderDate'], 'order-time'))]['remaining-time'])) }}
                                                                                    Hrs
                                                                                </div>
                                                                            </td>
                                                                        @endif
                                                                    @else
                                                                        <td class="is-hover">
                                                                            <div class="cal-cell cell-green-80"></div>
                                                                            <div class="tooltip tooltip--top bg-black">
                                                                                04:00 Hrs
                                                                            </div>
                                                                        </td>
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endfor
                                                    </tr>
                                                @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="v-pills-introduction" role="tabpanel"
                                     aria-labelledby="v-pills-introduction-tab">
                                    <div class="panel-content video">
                                        <iframe width="100%" height="100%" src=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if($consultant->courses != null)
                <div class="modal fade bookingModel" id="bookingModel-{{ $consultant->id }}">
                    <div class="modal-dialog bookingModel-dialog" role="document">
                        <div class="modal-content bookingModel-content">
                            <div class="modal-header bookingModel-header">
                                <h5 class="modal-title" id="exampleModalLabel">Book Your
                                    Consultant</h5>
                                <button type="button" class="close bookingModel-close"
                                        data-dismiss="modal" aria-label="Close">
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
                                                @foreach($consultant->courses as $courseID => $course)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="course"
                                                               value="{{ $course->id }}" id="{{ $course->id }}"
                                                               @if($courseID == 0) checked @endif>
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
                                                               @if($index==0) checked @endif>
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
                                                <input type="datetime-local" class="form-control" name="order_date"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="booking-content-form-div">
                                            <h3>Payment Method</h3>
                                            <div class="form-check booking-slot">
                                                <input class="form-check-input" type="radio" id="mada"
                                                       name="payment-method" value="mada">
                                                <label class="form-check-label" for="mada">Mada Pay</label>
                                            </div>

                                            <div class="mada payform" style="display: none">

                                                <br>

                                                <input type="hidden" name="callback_url"
                                                       value="{{ url(route('payment.callback', [$consultant->id])) }}"/>
                                                <input type="hidden" name="amount" value="{{ $order->order_charges }}"/>
                                                <input type="hidden" name="source[type]" value="creditcard"/>
                                                <input type="hidden" name="description"
                                                       value="Order ID: {{ $order->id }} and Booked by: {{ Auth::user() ? Auth::user()->name : 'User' }}">

                                                <div class="form-group">
                                                    <input type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           name="name" placeholder="Your Name"
                                                           value="{{ old('name') }}"/>
                                                    <span
                                                        class="invalid-feedback">@error('name') {{ $message }} @enderror</span>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text"
                                                           class="form-control number @error('number') is-invalid @enderror"
                                                           name="number" id="number"
                                                           placeholder="Card Number"/>
                                                    <span
                                                        class="invalid-feedback">@error('number') {{ $message }} @enderror</span>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-4">
                                                        <input type="text"
                                                               class="form-control month @error('month') is-invalid @enderror"
                                                               name="month" id="month"
                                                               placeholder="Expire Month">
                                                        <span
                                                            class="invalid-feedback">@error('month') {{ $message }} @enderror</span>
                                                    </div>

                                                    <div class="form-group col-4">
                                                        <input type="text"
                                                               class="form-control year @error('year') is-invalid @enderror"
                                                               name="year" id="year"
                                                               placeholder="Expire Year"/>
                                                        <span
                                                            class="invalid-feedback">@error('year') {{ $message }} @enderror</span>
                                                    </div>

                                                    <div class="form-group col-4">
                                                        <input type="text"
                                                               class="form-control cvc @error('cvc') is-invalid @enderror"
                                                               name="cvc" id="cvc"
                                                               placeholder="Your CVC"/>
                                                        <span
                                                            class="invalid-feedback">@error('cvc') {{ $message }} @enderror</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-check booking-slot">
                                                <input class="form-check-input" type="radio" name="payment-method"
                                                       id="apple" value="apple">
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
            @endif
        @endforeach
    </div>
</div>
{{ $consultants->links("pagination::simple-bootstrap-4") }}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('student/js/search.js') }}"></script>
<script src="{{ asset('student/js/custom.js') }}"></script>
<script src="{{ asset('student/js/toastr.js') }}"></script>
