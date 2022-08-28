<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function detail($role)
    {
        if ($role == 'consultant') {
            $courses = Course::all();
            return view('auth.consultant', compact('courses'));
        } else {
            return view('auth.student');
        }
    }
}