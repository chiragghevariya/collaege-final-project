@extends('app.layout.main')


@section('bread')
   
@stop

@section('content')

    <div class="card">
        <div class="card-action">
            <div class="right">               
                    Write Answer             
            </div>
        </div>
        <div class="card-content">
            <span class="card-title">
                Assignments  {{ $submission->assignment->title}}
            </span>
            
            @forelse($submission->assignment->questions as $question)

                @if($question->answer == null )
                <form action="{{route('courses.assignments.submissions.questions.answers.store',
                                ['course_id'=>$submission->course_id,
                                'assignment_id'=>$submission->assignment_id,
                                'submission_id'=>$submission->id,
                                'question_id'=>$question->id])}}"
                                method="post"
                                >
                                {{csrf_field()}}
                                <div class="input-field">
                                <label for="">
                                {{ $question->question }}
                                </label>
                                <textarea name="answer" id="" cols="30" rows="10" class="materialized-textarea"></textarea>
                                </div>

                                <div class="input-field">
                                <input type="submit" value="save">
                                </div>
                </form>
                @else
                           <form action="{{route('courses.assignments.submissions.questions.answers.update',
                                ['course_id'=>$submission->course_id,
                                'assignment_id'=>$submission->assignment_id,
                                'submission_id'=>$submission->id,
                                'question_id'=>$question->id,
                                'answer_id'=>$question->answer->id])}}"
                                method="post"
                                >
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <div class="input-field">
                                <label for="">
                                {{ $question->question }}
                                </label>
                                <textarea name="answer" id="" cols="30" rows="10" class="materialized-textarea">
                                {{ $question->answer->answer}}</textarea>
                                </div>

                                <div class="input-field">
                                <input type="submit" value="update">
                                </div>
                </form>

                @endif
            @empty

            <p> No question </p>

            @endforelse
        </div>
    </div>


@stop
