@extends('app.layout.main')


@section('bread')
    <a href="{{route('courses.enrolled')}}" class="breadcrumb">Courses</a>
    <a href="{{route('courses.resource',['course_id'=>$course->id])}}" class="breadcrumb">{{$course->title}}</a>
    <a href="#" class="breadcrumb">Assignment</a>
@stop

@section('content')

<div class="row">
    <div class="card">
       
            <div class="card-content">
            <span class="card-title">
                {{$assignment->title}} Assignment
            </span>
                <div class="row">
                    <div class="col s12 m6">
                       {{$assignment->title}}
                    </div>
                    <div class="col s12 m6">
                        {{$assignment->due_date}}
                    </div>
                </div>     
                <div class="card-action">
                @if(\Auth::user()->submission($course->id)->count() == 0 )
                    <form action="{{route('courses.assignments.submissions.store',['course_id'=>$course->id,'assignment_id'=>$assignment->id])}}" method="post">
                            {{csrf_field() }}
                            <input type="submit" value="Attempt">
                    </form>
                    
                @else  
                    <a href="{{route('courses.assignments.submissions.edit',
                            ['course_id'=>$course->id,
                            'assignment_id'=>$assignment->id,
                            'submission_id'=>\Auth::user()->submission($course->id)->first()->id])}}">Update</a>  
                @endif
                </div>           

    </div>
</div>


    <div class="card">
        <div class="card-content">
            <span class="card-title">
                Questions
            </span>
            @forelse($assignment->questions as $question)
            <div class="row ">
              
                    <div class="col s10 m10">
                       {{$question->question}}
                    </div>
                
            </div>
            @empty
               
                    <p class="center">No Questions</p>
                
            @endforelse
         
        </div>
        
    </div>


@stop
