<?php

namespace App\Http\Controllers;

use App\Models\ConsultantInformation;
use App\Models\Course;
use App\Models\GroupClass;
use App\Models\OrderPrice;
use App\Models\StudentOrder;
use App\Models\User;
use App\Traits\GroupClassCRUD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use PHPUnit\TextUI\XmlConfiguration\Group;

class ConsultantController extends Controller
{
    use GroupClassCRUD;

    function index()
    {
        $totalStudents = StudentOrder::join('order_prices', 'order_prices.id', '=', 'student_orders.order_id')
            ->join('users', 'users.id', '=', 'order_prices.consultant_id')
            ->where('order_prices.consultant_id', Auth::id())
            ->select('student_id')
            ->get()
            ->count();

        $totalOrders = StudentOrder::join('order_prices', 'order_prices.id', '=', 'student_orders.order_id')
            ->join('users', 'users.id', '=', 'order_prices.consultant_id')
            ->where('order_prices.consultant_id', Auth::id())
            ->get()
            ->count();

        return view('consultant.dashboard', compact('totalOrders', 'totalStudents'));
    }

    function settings()
    {
        $consultant = User::with('consultant')->where('id', Auth::id())->first();
        $selectedCourses = $consultant->courses;
        $allCourses = Course::all();

        $selectedCoursesIDs = array_column($selectedCourses->toArray(), 'id');
        foreach ($allCourses as $course) {
            $course['is-selected'] = in_array($course->id, $selectedCoursesIDs);
        }

        return view('consultant.account_settings', compact('consultant', 'allCourses'));
    }

    function classes()
    {
        $classes = GroupClass::where('consultant_id', Auth::id())->get();
        $courses = Course::all();
        return view('consultant.group_classes', compact('classes', 'courses'));
    }

    function orders()
    {
        $orders = StudentOrder::join('order_prices', 'order_prices.id', '=', 'student_orders.order_id')
            ->join('users', 'users.id', '=', 'order_prices.consultant_id')
            ->where('order_prices.consultant_id', Auth::id())
            ->get();

        return view('consultant.orders', compact('orders'));
    }

    function joinMeeting($meeting_id)
    {
        $meetings = StudentOrder::where('meeting_id', $meeting_id)->get();

        $redirectOnLeave = route('consultant.leaveMeeting', $meeting_id);

        foreach ($meetings as $meeting) {
            $meeting['meeting_id'] = $meeting->meeting_id;
        }

        return view('consultant.meeting', compact('meeting', 'redirectOnLeave'));
    }

    function leaveMeeting($meeting_id)
    {
        StudentOrder::where('meeting_id', $meeting_id)->update([
            'order_status' => 'completed'
        ]);

        return redirect()->route('consultant.orders');
    }

    function orderPrice()
    {
        $orderPrice = OrderPrice::with('user')->where('consultant_id', Auth::id())->paginate(10);

        return view('consultant.order_price', compact('orderPrice'));
    }

    function wallet()
    {
        return view('consultant.wallet');
    }

    function availability()
    {
        return view('consultant.availability_calender');
    }

    function totalStudents()
    {
        $studentOrder = StudentOrder::where('order_id', Auth::id())->get();
        return view('consultant.total_students', compact('studentOrder'));
    }

    function updateInfo(Request $request)
    {
        $user = Auth::user();
        $consultantInformation = ConsultantInformation::where('consultant_id', $user['id'])->first();

        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'country' => ['required', 'string'],
            'bio' => ['required', 'string'],
        ]);

        if ($request['newpassword'] != null || $request['newpassword_confirmation'] != null) {
            $request->validate(['newpassword' => ['required', 'string', 'min:8', 'confirmed']]);
            $password = Hash::make($request['newpassword']);
        } else {
            $password = $user['password'];
        }

        // Updating new Photo
        if (isset($request['image']) && $request->hasFile('image')) {
            $request->validate(['image' => 'mimes:jpeg,png,jpg']);

            $oldImage = public_path('/profile/' . $consultantInformation->image);
            File::exists($oldImage) ?? File::delete($oldImage);

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = rand(1000000000, 9999999999) . '.' . $extension;
            $image->move(public_path('/profile/'), $filename);
        } else {
            $filename = $user['image'];
        }

        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $password,
        ]);

        $consultantInformation->update([
            'phone' => $request['phone'],
            'country' => $request['country'],
            'bio' => $request['bio'],
            'image' => $filename
        ]);

        $user->courses()->detach();
        $user->courses()->attach($request['course_name']);

        return redirect()->back()->with('success', 'Your profile info has been updated successfully.');
    }

    function addOrderPrice(Request $request)
    {
        $request->validate([
            'order_title' => ['required'],
            'order_time' => ['required'],
            'order_charges' => ['required'],
        ]);

        $orderPrice = OrderPrice::create([
            'consultant_id' => Auth::id(),
            'order_title' => $request['order_title'],
            'order_time' => $request['order_time'],
            'order_charges' => $request['order_charges'],
        ]);

        if ($orderPrice) {
            return redirect()->back()->with('success', 'New Order Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    function updateOrderPrice(Request $request)
    {
        $orderPrice = OrderPrice::find($request->input('cid'))->update([
            'order_title' => $request['order_title'],
            'order_time' => $request['order_time'],
            'order_charges' => $request['order_charges'],
        ]);

        if ($orderPrice) {
            return redirect()->back()->with('success', 'Order Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    function removeOrderPrice($id)
    {
        OrderPrice::where('id', $id)->delete();

        return redirect('consultant/order_price');
    }
}
