<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    public function index()
    { 
//        $this->authorize('index',Course::class);
        $courses = Course::faculty()->get();
        return view('app.courses.index')->with(['courses' => $courses]);
    }

    public function create()
    {
        return view('app.courses.create');
    }

    public function store(Request $request)
    {
        $course = new Course();

        $course->user_id = \Auth::user()->id; 
        
        $course->title = $request->title;
        $course->slug = str_slug($request->title);
        $course->code = $request->code;
        $course->credit = $request->credit;
        $course->lectures_a_week = $request->lectures_a_week;
        $course->sem = $request->sem;

        $course->department_id = \Auth::user()->department_id;

        $course->brief = $request->brief;
        $course->requirement = $request->requirement;
        $course->message = $request->message;

        $course->save();

        return redirect()->route('courses.index');

    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('app.courses.edit')->with(['course'=>$course]);
    }

    public function update($id, Request $request)
    {
        $course = Course::find($id);

        $course->user_id = \Auth::user()->id; 
        
        $course->title = $request->title;
        $course->slug = str_slug($request->title);
        $course->code = $request->code;
        $course->credit = $request->credit;
        $course->lectures_a_week = $request->lectures_a_week;
        $course->sem = $request->sem;

        $course->department_id = \Auth::user()->department_id;

        $course->brief = $request->brief;
        $course->requirement = $request->requirement;
        $course->message = $request->message;

        $course->save();

        return redirect()->route('courses.index');

    }
}
