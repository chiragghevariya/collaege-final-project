@extends('app.layout.main')


@section('bread')
    <a href="{{route('courses.index')}}" class="breadcrumb">Courses</a>
    <a href="{{route('courses.edit',['course_id'=>$course->id])}}" class="breadcrumb">{{$course->title}}</a>
    <a href="{{route('courses.assignments.index',['course_id'=>$course->id])}}" class="breadcrumb">Assignment</a>
    <a href="#!" class="breadcrumb">Add Assignment</a>
@stop

@section('content')

<div class="row">
    <div class="card">
        <form action="{{route('courses.assignments.update',['course_id'=>$course->id,'assignment_id'=>$assignment->id])}}" method="post">
            {{ csrf_field() }}
            <div class="card-content">
            <span class="card-title">
                {{$assignment->title}} Assignment
            </span>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text" name="title" value="{{$assignment->title}}" placeholder="Lecture Title">
                            <label for="">Assignment Title</label>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text" class="datepicker" value="{{$assignment->due_date}}" name="due_date">
                            <label for="">Due Date</label>
                        </div>
                    </div>
                </div>                
        

            <div class="card-action">
                <input type="submit" value="Update" class="btn">
                <input type="button" value="Cancel" class="btn grey">
            </div>
        </form>
    </div>
</div>


    <div class="card">
        <div class="card-content">
            <span class="card-title">
                Questions
            </span>
            @forelse($assignment->questions as $question)
            <div class="row ">
                <form action="{{route('courses.assignments.questions.update',['course'=>$course->id,'assignment'=>$assignment->id,'question_id'=>$question->id])}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('put')}}
                    <div class="col s10 m10">
                        <div class="input-field">                    
                            <input type="text" value="{{$question->question}}" placeholder="Question Here" name="question">
                        </div>
                    </div>
                    <div class="col s1 m1">
                        <div class="input-field">
                            <input type="submit" class="btn" value="U">
                        </div>
                    </div>
                </form>     
                <div class="col s1 m1">
                    <form action="{{route('courses.assignments.questions.destroy',['course'=>$course->id,'assignment'=>$assignment->id,'question_id'=>$question->id])}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete')}}
                        <div class="input-field">
                                <input type="submit" class="btn red lighten-1" value="X">
                        </div>
                    </form>    
                </div>         
            </div>
            @empty
               
                    <p class="center">Add Your First question</p>
                
            @endforelse
            <div class="row blue lighten-3">
                <form action="{{route('courses.assignments.questions.store',['course'=>$course->id,'assignment'=>$assignment->id])}}" method="post">
                    {{ csrf_field() }}
                    <div class="col s10 m10">
                        <div class="input-field">                    
                            <input type="text" placeholder="Question Here" name="question">
                        </div>
                    </div>
                    <div class="col s2 m2">
                        <div class="input-field">
                            <input type="submit" class="btn" value="+">
                        </div>
                    </div>
                </form>              
            </div>
        </div>
        
    </div>


@stop
