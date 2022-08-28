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

class AdminController extends Controller
{
    use GroupClassCRUD;

    function index()
    {
        $student = User::where('role', 'student')->get();
        $consultant = User::where('role', 'consultant')->get();
        $studentOrder = StudentOrder::all();
        return view('admin.dashboard', compact('student', 'consultant', 'studentOrder'));
    }

    function settings()
    {
        return view('admin.account_settings');
    }

    function addSubjects()
    {
        $allCourses = Course::all();

        return view('admin.add_subjects_of_consultation', compact('allCourses'));
    }

    function classes()
    {
        $classes = GroupClass::all();
        $courses = Course::all();
        return view('admin.group_classes', compact('classes', 'courses'));
    }

    function orders()
    {
        $allBook = StudentOrder::join('users', 'users.id', '=', 'student_orders.student_id')
            ->join('order_prices', 'order_prices.id', '=', 'student_orders.order_id')
            ->select('student_orders.*', 'users.name', 'order_prices.*')
            ->get();
        return view('admin.orders', compact('allBook'));
    }

    function totaConsultants()
    {
        $totalConsultant = User::with('consultant')->where('role', 'consultant')->paginate(50);
        return view('admin.total_consultants', compact('totalConsultant'));
    }

    function totalStudents()
    {
        $totalStudent = User::with('consultant')->where('role', 'student')->paginate(50);
        return view('admin.total_students', compact('totalStudent'));
    }

    function wallet()
    {
        return view('admin.wallet');
    }

    function addNewSubject(Request $request)
    {
        $request->validate([
            'course_name' => ['required'],
            'image' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension  = $image->getClientOriginalExtension();
            $filename = rand(1000000000, 9999999999) . '.' . $extension;
            $image->move(public_path('/profile/'), $filename);
            $image = $filename;
        }

        $Couse = Course::create([
            'course_name' => $request['course_name'],
            'image' => $image,
        ]);

        if (!$Couse) {
            return response()->json(['status' => 0, 'msg' => 'Something went wrong.']);
        } else {
            return response()->json(['status' => 1, 'msg' => 'New Subject added successfuly.']);
        }
    }

    function removeSubject($id)
    {
        $Course = Course::where('id', $id)->delete();

        if (!$Course) {
            return response()->json(['status' => 0, 'msg' => 'Something went wrong.']);
        } else {
            return response()->json(['status' => 1, 'msg' => 'Subject Removed Successfully']);
        }
    }

    public function editConsultant($id)
    {
        $consultant = User::with('consultant')->where('id', $id)->first();

        return view('admin.edit_consultant', compact('consultant'));
    }

    public function updateConsultant(Request $request)
    {
        $user = User::where('id', $request['consultant_id'])->first();
        $consultantInformation = ConsultantInformation::where('consultant_id', $user['id'])->first();

        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'country' => ['required', 'string'],
            'bio' => ['required', 'string'],
        ]);

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
        ]);

        $consultantInformation->update([
            'phone' => $request['phone'],
            'country' => $request['country'],
            'bio' => $request['bio'],
            'image' => $filename
        ]);

        if ($user && $consultantInformation) {
            return redirect()->back()->with('success', 'Your profile info has been updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function deleteConsultant($id)
    {
        $user = User::where('id', $id)->first();
        $consultantInformation = ConsultantInformation::where('consultant_id', $user['id'])->first();

        $oldImage = public_path('/profile/' . $consultantInformation->image);
        File::exists($oldImage) ?? File::delete($oldImage);

        $user->delete();
        $consultantInformation->delete();

        if ($user && $consultantInformation) {
            return redirect()->back()->with('success', 'Consultant has been deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function editStudent($id)
    {
        $student = User::where('id', $id)->first();

        return view('admin.edit_student', compact('student'));
    }

    public function updateStudent(Request $request)
    {
        $user = User::where('id', $request['student_id'])->first();

        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
        ]);

        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
        ]);

        if ($user) {
            return redirect()->back()->with('success', 'Your profile info has been updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function deleteStudent($id)
    {
        $user = User::where('id', $id)->delete();

        if ($user) {
            return redirect()->back()->with('success', 'Student has been deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function editOrder($id)
    {
        $order = OrderPrice::where('id', $id)->first();

        return view('admin.edit_order', compact('order'));
    }

    public function updateOrder(Request $request)
    {
        $order = OrderPrice::where('id', $request['order_id'])->first();

        $request->validate([
            'order_title' => ['required', 'string'],
            'order_time' => ['required'],
            'order_charges' => ['required'],
        ]);

        $order->update([
            'order_title' => $request['order_title'],
            'order_time' => $request['order_time'],
            'order_charges' => $request['order_charges'],
        ]);

        if ($order) {
            return redirect()->back()->with('success', 'Order has been updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function deleteOrder($id)
    {
        $order = OrderPrice::where('id', $id)->delete();

        if ($order) {
            return redirect()->back()->with('success', 'Order has been deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}
