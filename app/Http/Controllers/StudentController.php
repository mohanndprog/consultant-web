<?php

namespace App\Http\Controllers;

use App\Models\ConsultantInformation;
use App\Models\Course;
use App\Models\GroupClass;
use App\Models\OrderPrice;
use App\Models\Review;
use App\Models\StudentOrder;
use App\Models\User;
use EyesonTeam\Eyeson\Eyeson;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    public function welcome(Request $request)
    {
        $consultants = User::where('users.role', 'consultant')
            ->join('consultant_information', 'users.id', '=', 'consultant_information.consultant_id')
            ->join('course_user', 'users.id', '=', 'course_user.user_id')
            ->join('order_prices', 'users.id', '=', 'order_prices.consultant_id')
            ->select('users.*')
            ->distinct('users.id')
            ->get();

        $allCourses = Course::all();

        foreach ($consultants as $consultant) {
            $consultant['studentCount'] = count($consultant->consultantOrdersWithStudents()->get()->groupBy('student_id'));
        }

        foreach ($allCourses as $courses) {
            $courses['consultantCount'] = count($courses->users()->get());
        }

        return view('welcome', compact('consultants', 'allCourses'));
    }

    public function applyToTeach()
    {
        return view('apply-to-teach');
    }

    public function groupClasses()
    {
        $classes = GroupClass::all();
        $courses = Course::all();
        return view('group-classes', compact('classes', 'courses'));
    }

    public function viewGroupClass($id)
    {
        $class = GroupClass::find($id);
        return view('group-classes-detail-page', compact('class'));
    }

    function index()
    {
        $studentOrder = StudentOrder::where('student_id', Auth::id())->get();
        return view('student.dashboard', compact('studentOrder'));
    }

    function settings()
    {
        return view('student.account_settings');
    }

    function classes()
    {
        return view('student.group_classes');
    }

    function orders(Request $request)
    {
        $orders = StudentOrder::where('student_id', Auth::id())->get();

        // Check if order_date is today
        foreach ($orders as $order) {
            $order['checkOrderDate'] = \Carbon\Carbon::parse($order->order_date) >= \Carbon\Carbon::now();
            $order['reviewExists'] = Review::where('student_id', Auth::id())->where('order_id', $order['order_id'])->exists();
        }

        return view('student.orders', compact('orders'));
    }

    function joinMeeting($meeting_id)
    {
        $meetings = StudentOrder::where('meeting_id', $meeting_id)->get();

        foreach ($meetings as $meeting) {
            $meeting['meeting_id'] = $meeting->meeting_id;
            if (\Carbon\Carbon::parse($meeting->order_date) > \Carbon\Carbon::now()) {
                return redirect()->route('student.orders')
                    ->with('error', 'You cannot join this meeting before the link is public.');
            }
        }

        return view('student.meeting', compact('meeting'));
    }

    function wallet()
    {
        return view('student.wallet');
    }

    function searchConsultants(Request $request)
    {
        $consultants = User::where('users.role', 'consultant')
            ->join('consultant_information', 'users.id', '=', 'consultant_information.consultant_id')
            ->when($request->search, function ($query) use ($request) {
                return $query->where('users.name', 'like', '%' . $request->search . '%');
            })
            ->when($request->findCountry, function ($query) use ($request) {
                return $query->where('consultant_information.country', $request->findCountry);
            })
            ->when($request->findGender, function ($query) use ($request) {
                return $query->where('consultant_information.gender', $request->findGender);
            })
            ->join('course_user', 'users.id', '=', 'course_user.user_id')
            ->when($request->findCourse, function ($query) use ($request) {
                return $query->where('course_user.course_id', $request->findCourse);
            })
            ->join('order_prices', 'users.id', '=', 'order_prices.consultant_id')
            ->when($request->filterSortBy, function ($query) use ($request) {
                if($request->filterSortBy == 'popularity') {
                    return $query->orderBy('consultant_information.average_rating', 'desc');
                } elseif ($request->filterSortBy == 'price_asc') {
                    return $query->orderBy('order_prices.order_charges', 'asc');
//                } else if ($request->filterSortBy == 'price_desc') {
                } else {
                    return $query->orderBy('order_prices.order_charges', 'desc');
                }
            })
            ->when($request->filterAvailability, function ($query) use ($request) {
                return $query->whereDoesntHave('consultantOrdersWithStudents', function ($query) use ($request) {
                    return $query->where('order_date', '>=', \Carbon\Carbon::parse($request->filterAvailability)->startOfWeek());
                });
            })
            ->when($request->filterPrice, function ($query) use ($request) {
                return $query->whereBetween('order_prices.order_charges', explode('-', $request->filterPrice));
            })
            ->select('users.*')
            ->distinct('users.id')
            ->paginate(10);
        // dd($consultants);
        $allCourses = Course::all();
        $location = ConsultantInformation::select('country')->orderBy('country')->distinct()->get();

        foreach ($consultants as $consultant) {
            $consultant['charges'] = count($consultant->orderPrice) > 0 ? $consultant->orderprice()
                ->when($request->filterPrice, function ($query) use ($request) {
                    return $query->whereBetween('order_charges', explode('-', $request->filterPrice));
                })
                ->orderBy('order_charges')->first()->order_charges : "N/A";
            $consultant['studentCount'] = count($consultant->consultantOrdersWithStudents()->get()->groupBy('student_id'));
            $consultant['courses'] = count($consultant->courses) > 0 ? $consultant->courses()->get() : null;
            $consultant['availability'] = $consultant->consultantOrdersWithStudents()
                ->whereBetween('order_date', [Carbon::now()->startOfWeek()->subDay(), Carbon::now()->endOfWeek()->subDay()])
                ->orderBy('order_date')
                ->get();

            $consultant['orderDate'] = $orderD = array();

            if (!is_null($consultant['availability'])) {
                foreach ($consultant['availability']->toArray() as $existingOrder) {
                    $existingOrderHourPerCalendar = floor(Carbon::parse($existingOrder['order_date'])->format("G") / 4) * 4;
                    $existingOrderTime = Carbon::parse($existingOrder['order_date'])->format("d-m-Y " . $existingOrderHourPerCalendar);
                    $order = OrderPrice::find($existingOrder['order_id']);

                    if (in_array($existingOrderTime, array_column($orderD, 'order-time')) == true) {
                        $index = array_search($existingOrderTime, array_column($orderD, 'order-time'));
                        $orderD[$index]['total-time'] = $orderD[$index]['total-time'] + ($order ? $order->getAttributes()['order_time'] : 0);
                        $orderD[$index]['remaining-time'] = $orderD[$index]['remaining-time'] - ($order ? $order->getAttributes()['order_time'] : 0);
                    } else {
                        array_push($orderD, array(
                            'total-time' => $order ? $order->getAttributes()['order_time'] : 0,
                            'order-time' => $existingOrderTime,
                            'remaining-time' => 240 - ($order ? $order->getAttributes()['order_time'] : 0),
                        ));
                    }
                }
                $consultant['orderDate'] = $orderD;

                // Fetch average reviews rating for each consultant
                $consultant['reviews'] = round(Review::where('consultant_id', $consultant->id)->avg('rating'), 1);

                // Fetch students who rated the consultant
                $consultant['studentReviewed'] = count(Review::where('consultant_id', $consultant->id)->pluck('student_id')->toArray());
            }
        }

//        dd($consultants[1]['orderDate']);

        $sortBy = $request->filterSortBy ?? 'popularity';

        if ($request->ajax()) {
            return view(
                'find-consultants-details',
                compact(
                    'consultants',
                    'allCourses',
                    'location',
                    'sortBy',
                ))->render();
        }

        //        dd($consultants[9]['courses']);
        return view(
            'find-consultants',
            compact(
                'consultants',
                'allCourses',
                'location',
                'sortBy',
            )
        );
    }

    function consultantProfile($id)
    {
        $consultant = User::with('consultant')
            ->has('consultant')
            ->where('users.role', 'consultant')
            ->where('id', $id)->first();

        if ($consultant) {
            $selectedCourses = $consultant->courses;
            $orderPrice = $consultant->orderPrice;
            $allCourses = Course::all();

            $consultant['studentCount'] = count($consultant->consultantOrdersWithStudents()->get()->groupBy('student_id'));

            return view(
                'consultant-profile',
                compact(
                    'consultant',
                    'selectedCourses',
                    'orderPrice',
                    'allCourses'
                )
            );
        } else {
            return redirect()->back();
        }
    }

    function studentBookOrder(Request $request)
    {

        $randomMeetingNumber = bin2hex(random_bytes(2)) . "-" . bin2hex(random_bytes(2)) . "-" . bin2hex(random_bytes(2));

        if (Auth::user()) {
            if (Auth::user()['role'] == 'student') {
                $request->validate([
                    'course' => ['required', 'integer'],
                    'order' => ['required', 'integer'],
                    'order_date' => ['required'],
                    'payment-method' => ['required', 'string'],
                ]);

                $course = Course::find($request['course']);
                $order = OrderPrice::find($request['order']);

                $alreadyExits = StudentOrder::where('student_id', Auth::id())
                    ->where('order_id', $request['order'])
                    ->where('course_id', $request['course'])
                    ->first();

                $orderDate = Carbon::parse(StudentOrder::where('order_id', $request['order'])
                    ->where('course_id', $request['course'])->first()->order_date);
                $orderDateStart = Carbon::parse($orderDate);
                $orderDateEnd = Carbon::parse(($orderDate)->addMinutes((int)$order->order_time));
                $checkOrderTime = Carbon::parse($request['order_date'])->between($orderDateStart, $orderDateEnd);
                // dd($orderDateStart, $orderDateEnd);

                if (!$checkOrderTime) {

                    if (!Carbon::parse($request['order_date'])->lt(Carbon::now())) {

                        if (!$alreadyExits) {

                            if ($course && $order) {

                                $status = false;

                                if ($request['payment-method'] == 'mada') {

                                    $request->validate([
                                        'name' => ['required'],
                                        'number' => ['required', 'numeric', 'digits:16'],
                                        'month' => ['required', 'numeric', 'digits:2'],
                                        'year' => ['required', 'numeric', 'digits:2'],
                                        'cvc' => ['required', 'numeric', 'digits:3'],
                                    ]);

                                    $apiURL = "https://api.moyasar.com/v1/payments";

                                    $token = base64_encode(config('services.moyasar.secret') . ':');

                                    // Creating a Payment

                                    $response = Http::withHeaders([
                                        'Authorization' => 'Basic ' . $token,
                                        'Content-Type' => 'application/json',
                                        'Accept' => 'application/json',
                                    ])
                                        ->post($apiURL, [
                                            'callback_url' => $request['callback_url'],
                                            'publishable_api_key' => config('services.moyasar.key'),
                                            'amount' => $request['amount'],
                                            'description' => $request['description'],
                                            'source' => [
                                                'type' => 'creditcard',
                                                'name' => $request['name'],
                                                'number' => $request['number'],
                                                'month' => $request['month'],
                                                'year' => $request['year'],
                                                'cvc' => $request['cvc'],
                                            ],
                                        ]);

                                    $status = $response->status() == 201 ? true : false;

                                    $result = json_decode($response->getBody(), true);
                                }

                                if ($status == true) {
                                    StudentOrder::create([
                                        'student_id' => Auth::id(),
                                        'course_id' => $request['course'],
                                        'order_id' => $request['order'],
                                        'order_date' => $request['order_date'],
                                        'order_status' => 'active',
                                        'payment_method' => $request['payment-method'],
                                        'meeting_id' => $randomMeetingNumber,
                                        'payment_id' => $result['id'],
                                    ]);


                                    if ($request['payment-method'] == 'mada') {
                                        header("Location: " . $result['source']['transaction_url']);
                                        exit();
                                    }
                                }
                            } else {
                                return redirect()->back()->with('error', 'Something went wrong.');
                            }
                        } else {
                            return redirect()->back()->with('error', 'You already booked this order.');
                        }
                    } else {
                        return redirect()->back()->with('error', 'You can not book an order in the past.');
                    }
                } else {
                    return redirect()->back()->with('error', 'Sorry, this time slot is already booked. Please select another time slot.');
                }
            } else {
                return redirect()->back()->with('error', 'You must be logged in as a Student to use this .');
            }
        } else {
            return redirect()->route('login');
        }
    }

    function callback()
    {

        $id = request()->query('id');

        $apiURL = "https://api.moyasar.com/v1";

        $payment = Http::baseUrl($apiURL)
            ->withBasicAuth(config('services.moyasar.secret'), '')
            ->get('/payments/' . $id)
            ->json();

        $order = StudentOrder::where('payment_id', $id)->first();

        if ($payment['status'] == 'paid') {
            $order->order_status = 'paid';
            $order->save();

            if (isset($payment['type']) && $payment['type'] == 'invalid_request_error') {
                return redirect()->back()->with('error', 'Something went wrong.');
            }
        }
        return redirect()->route('searchConsultants')->with('success', 'Payment Done & Order Booked Successfully');
    }


    function updateInfo(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
        ]);

        if ($request['newpassword'] != null || $request['newpassword_confirmation'] != null) {
            $request->validate(['newpassword' => ['required', 'string', 'min:8', 'confirmed']]);
            $password = Hash::make($request['newpassword']);
        } else {
            $password = $user['password'];
        }

        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $password,
        ]);

        return redirect()->back()->with('success', 'Your profile info has been updated successfully.');
    }

    function addReview(Request $request)
    {

        // Check if review already exists
        $reviewExists = Review::where('student_id', Auth::id())
                            ->where('consultant_id', $request['consultant_id'])
                            ->first();

        $orders = StudentOrder::where('student_id', Auth::id())->where('order_status', 'completed')->first();

        if (!$reviewExists) {
            if ($orders) {
                $review = Review::create([
                    'student_id' => Auth::id(),
                    'consultant_id' => $request['consultant_id'],
                    'order_id' => $request['order_id'],
                    'rating' => $request['rating'],
                    'comment' => $request['comment'],
                ]);
            }
        }

        // Save Review in consultant table
        $consultant = ConsultantInformation::where('consultant_id', $request['consultant_id'])->first();
        if($consultant->average_rating = 0) {
            $consultant->average_rating = $request['rating'];
            $consultant->save();
        } else {
            $averageRating = Review::where('consultant_id', $request['consultant_id'])->avg('rating');
            $consultant->average_rating = $consultant->update([
                'average_rating' => round($averageRating, 1),
            ]);
        }

        // dd($consultant);

        if ($review && $consultant) {
            return redirect()->back()->with('success', 'Thank You for your review.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}
