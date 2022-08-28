<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ConsultantInformation;
use App\Models\Course;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm($role)
    {
        if ($role == 'student') {
            return view('auth.student');
        } else {
            return view('auth.consultant');
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    function register(Request $request)
    {
        $role = $request->route('role');
        $userExists = User::where('email', $request['email'])->first();

        if (($role == 'student' || $role == 'consultant') && !$userExists) {

            $request->validate([
                'name' => ['required'],
                'email' => ['required'],
                'password' => ['required']
            ]);

            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'role' => $role,
                'password' => Hash::make($request['password']),
            ]);

            if ($role == 'consultant') {
                $request->validate([
                    'phone' => ['required'],
                    'country' => ['required'],
                    'gender' => ['required'],
                    'bio' => ['required'],
                    'institution' => ['required'],
                    'start_year' => ['required'],
                    'end_year' => ['required'],
                    'degree' => ['required'],
                    'image' => ['required'],
                    'course_name' => ['required'],
                ]);

                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $extension  = $image->getClientOriginalExtension();
                    $filename = rand(1000000000, 9999999999) . '.' . $extension;
                    $image->move(public_path('/profile/'), $filename);
                    $image = $filename;
                }

                ConsultantInformation::create([
                    'consultant_id' => $user->id,
                    'phone' => $request['phone'],
                    'country' => $request['country'],
                    'gender' => $request['gender'],
                    'bio' => $request['bio'],
                    'institution' => $request['institution'],
                    'start_year' => $request['start_year'],
                    'end_year' => $request['end_year'],
                    'degree' => $request['degree'],
                    'image' => $image,
                ]);

                $user->courses()->attach($request['course_name']);
            }

            return redirect()->route('login')->with('success', 'You have been Registered Successfully');

            switch ($user->role) {
                case 'student':
                    return route('student.dashboard');
                    break;
                case 'consultant':
                    return route('consultant.dashboard');
                    break;
                default:
                    return route('home');
                    break;
            }
        } else {
            return redirect()->back()->with('fail', 'Something is wrong');
        }
    }
}
