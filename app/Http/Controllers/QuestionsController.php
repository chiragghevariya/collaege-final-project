<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{
    public function store($course_id, $assignment_id, Request $request)
    {
        $question = new Question();
        $question->question = $request->question;
        $question->course_id = $course_id;
        $question->assignment_id = $assignment_id;
        $question->save();

        return redirect()->route('courses.assignments.edit',['course_id'=>$course_id,'assignment_id'=>$assignment_id]);
    }

    public function update($course_id, $assignment_id, $question_id, Request $request)
    {
        $question = Question::find($question_id);
        $question->question = $request->question;
        $question->course_id = $course_id;
        $question->assignment_id = $assignment_id;
        $question->save();

        return redirect()->route('courses.assignments.edit',['course_id'=>$course_id,'assignment_id'=>$assignment_id]);
    }

    public function destroy($course_id, $assignment_id, $question_id, Request $request)
    {
        Question::find($question_id)->delete();
        return redirect()->route('courses.assignments.edit',['course_id'=>$course_id,'assignment_id'=>$assignment_id]);
 
    }

    public function show($course_id, $assignment_id, $question_id)
    {
        return view('app.courses.assignments.attempt.create');
    }
}
