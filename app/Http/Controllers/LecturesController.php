<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lecture;

use Carbon\Carbon;

class LecturesController extends Controller
{
    public function create($course_id)
    {
        $course = Course::find($course_id);
        return view('app.courses.lectures.create')->with(['course'=>$course]);
    }

    public function edit($course_id, $lecture_id)
    {
        $course = Course::find($course_id);
        $lecture = Lecture::find($lecture_id);
        return view('app.courses.lectures.edit')->with(['course'=>$course,'lecture'=>$lecture]);
    }

    public function index($course_id)
    {
        $course = Course::with('lectures')->find($course_id);
        return view('app.courses.lectures.index')->with(['course'=>$course]);
    }

    public function store($course_id , Request $request)
    {
        $lecture = new Lecture();
        $lecture->user_id = \Auth::user()->id;
        $lecture->course_id = $course_id;
        $lecture->title = $request->title;
        $lecture->slug = str_slug($request->title);
        $lecture->brief = $request->brief;
        $lecture->requirement = $request->requirement;
        $lecture->body = $request->body;
        $lecture->due_date = Carbon::parse($request->due_date);
        $lecture->save();

        return redirect()->route('courses.lectures.index',['course_id'=>$course_id]);
    }

    public function update($course_id, $lecture_id, Request $request)
    {
        $lecture = Lecture::find($lecture_id);
        $lecture->user_id = \Auth::user()->id;
        $lecture->course_id = $course_id;
        $lecture->title = $request->title;
        $lecture->slug = str_slug($request->title);
        $lecture->brief = $request->brief;
        $lecture->requirement = $request->requirement;
        $lecture->body = $request->body;
        $lecture->due_date = Carbon::parse($request->due_date);
        $lecture->save();

        return redirect()->route('courses.lectures.index',['course_id'=>$course_id]);
    }

    public function destroy($course_id,$lecture_id)
    {
        Lecture::find($lecture_id)->delete();
        return redirect()->route('courses.lectures.index',['course_id'=>$course_id]);
    }

    public function show($course_id , $lecture_id)
    {
        $lecture = Lecture::find($course_id);
        $course = Course::find($lecture_id);
        return view('app.courses.lectures.show')->with(['course'=>$course,'lecture'=>$lecture]);
    }
}
