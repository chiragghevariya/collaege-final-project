<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submission;
use App\Assignment;
class SubmissionsController extends Controller
{
    public function store($course_id , $assignment_id)
    {
        $submission = new Submission();
        $submission->user_id  = \Auth::user()->id;
        $submission->course_id = $course_id;
        $submission->assignment_id = $assignment_id;

        $submission->save();

        return redirect()->route('courses.assignments.show',['course_id'=>$course_id,'assignment_id'=>$assignment_id]);
    }

    public function edit($course_id,$assignment_id, $submission_id)
    {
        $submission = Submission::with('assignment.questions.answer')->find($submission_id);
        // return $submission;
        return view('app.courses.assignments.attempt.book')->with(['submission'=>$submission]);
    }
}
