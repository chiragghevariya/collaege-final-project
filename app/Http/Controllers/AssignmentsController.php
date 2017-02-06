<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Assignment;
use Carbon\Carbon;

class AssignmentsController extends Controller
{
    public function index($course_id)
    {
        $course = Course::with('assignments')->find($course_id);
        return view('app.courses.assignments.index')->with(['course'=>$course]);
    }

    public function create($course_id)
    {
        $course = Course::find($course_id);
        return view('app.courses.assignments.create')->with(['course'=>$course]);
    }

    public function store($course_id , Request $request)
    {
        $assignment = new Assignment();
        $assignment->title = $request->title;
        $assignment->slug = str_slug($request->title);
        $assignment->course_id = $course_id;
        $assignment->user_id = \Auth::user()->id;
        $assignment->due_date = Carbon::parse($request->due_date);
        $assignment->save();
        return redirect()->route('courses.assignments.edit',['course_id'=>$course_id,'assignment_id'=>$assignment->id]);
    }

    public function edit($course_id,$assignment_id)
    {
        $course = Course::find($course_id);
        $assignment = Assignment::with('questions')->find($assignment_id);
        return view('app.courses.assignments.edit')->with(['course'=>$course,'assignment'=>$assignment]);
    }

    public function show($course_id, $assignment_id)
    {
        $course = Course::find($course_id);
        $assignment = Assignment::with('questions')->find($assignment_id);
        return view('app.courses.assignments.show')->with(['course'=>$course,'assignment'=>$assignment]);
    }

    
}
