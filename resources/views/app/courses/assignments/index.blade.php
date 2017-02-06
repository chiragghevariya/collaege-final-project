@extends('app.layout.main')


@section('bread')
    <a href="{{route('courses.index')}}" class="breadcrumb">Courses</a>
    <a href="{{route('courses.edit',['course_id'=>$course->id])}}" class="breadcrumb">{{$course->title}}</a>
    <a href="#!" class="breadcrumb">Assignments</a>
@stop

@section('content')

    <div class="card">
        <div class="card-action">
            <div class="right">
                <a href="{{route('courses.assignments.create',['course_id'=>$course->id])}}" class="btn">
                    Add Assignment
                </a>
            </div>
        </div>
        <div class="card-content">
            <span class="card-title">
                Assignments
            </span>
            
            <ul class="collection">  
            @forelse($course->assignments as $assignment)                
                <li class="collection-item dismissable">
                    <div>{{$assignment->title}} 
                        <a href="{{route('courses.assignments.edit',['course_id'=>$course->id,'assignment_id'=>$assignment->id])}}" 
                           class="secondary-content">
                           {{ Carbon\Carbon::parse($assignment->due_date)->format('d M,y')}}
                           <i class="material-icons">send</i>
                        </a>
                    </div>
                </li>
            @empty
                <p class="center"> No assignments found </p>
            @endforelse
            </ul>
        </div>
    </div>


@stop
