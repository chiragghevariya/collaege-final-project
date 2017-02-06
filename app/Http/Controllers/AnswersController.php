<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AnswersController extends Controller
{
    public function store($course_id,$assignment_id, $submission_id,$question_id, Request $request)
    {
        $answer = new Answer();
        $answer->answer = $request->answer;
        $answer->course_id = $course_id;
        $answer->assignment_id = $assignment_id;
        $answer->submission_id = $submission_id;
        $answer->question_id = $question_id;
        $answer->user_id = \Auth::user()->id;
        $answer->answer = $request->answer;
        $answer->save();

        return redirect()->route('courses.assignments.show',['course_id'=>$course_id,'assignment_id'=>$assignment_id]);
    }
}
