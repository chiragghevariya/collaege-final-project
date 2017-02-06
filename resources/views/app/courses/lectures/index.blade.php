@extends('app.layout.main')


@section('bread')
    <a href="{{route('courses.index')}}" class="breadcrumb">Courses</a>
    <a href="{{route('courses.edit',['course_id'=>$course->id])}}" class="breadcrumb">{{$course->title}}</a>
    <a href="#!" class="breadcrumb">Lectures</a>
@stop

@section('content')

    <div class="card">
        <div class="card-action">
            <div class="right">
                <a href="{{route('courses.lectures.create',['course_id'=>$course->id])}}" class="btn">
                    Add Lecture
                </a>
            </div>
        </div>
        <div class="card-content">
            <span class="card-title">
                Lectures
            </span>
            
            <ul class="collection">  
            @forelse($course->lectures as $lecture)                
                <li class="collection-item dismissable">
                    <div>{{$lecture->title}} 
                        <a href="{{route('courses.lectures.edit',['course_id'=>$course->id,'lecture_id'=>$lecture->id])}}" 
                           class="secondary-content">
                           {{ Carbon\Carbon::parse($lecture->due_date)->format('d M,y')}}
                           <i class="material-icons">send</i>
                        </a>
                    </div>
                </li>
            @empty
                <p class="center"> No lectures found </p>
            @endforelse
            </ul>
        </div>
    </div>


@stop
