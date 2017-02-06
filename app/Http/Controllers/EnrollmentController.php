<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    public function enroll($id)
    {
        $course = Course::find($id);
        $course->enroll()->attach(\Auth::user()->id);

        return "Enrolled Current user";
    }

    public function enrolled()
    {
        $courses = \Auth::user()->enrolledin()->get();       
        return view('app.courses.enrolledin')->with(['courses' => $courses]);
    }

    public function resource($id)
    {
        $course = Course::with('lectures','assignments')->find($id);
        return view('app.courses.resource')->with(['course' => $course]);
    }
}
