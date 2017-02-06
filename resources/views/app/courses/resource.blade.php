@extends('app.layout.main')

@section('bread')
    <a href="{{route('courses.enrolled')}}" class="breadcrumb">Courses</a>
    <a href="{{route('courses.resource',['id'=>$course->id])}}" class="breadcrumb">{{$course->title}}</a>
@stop

@section('content')

<div class="row">
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <span class="card-title">
                    Today's Lectures
                </span>        
                <ul class="collection">
                @forelse($course->lectures as $lecture)
                    <li class="collection-item dismissable">
                            <div>{{ $lecture->title}}
                                <a href="{{route('courses.lectures.show',['course_id'=>$lecture->course->id,'lecture_id'=>$lecture->id])}}" 
                                class="secondary-content">
                                <i class="material-icons">send</i>
                                </a>
                            </div>
                    </li>
                    
                @empty
                    <p class="center"> No Lectures today</p>
                @endforelse 
                </ul>   
            </div>
        </div>
    </div>

    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <span class="card-title">
                    Assignments To Check
                </span>        
                <ul class="collection">
                @forelse($course->assignments as $assignment)
                    <li class="collection-item dismissable">
                            <div>{{ $assignment->title}}
                                <a href="{{route('courses.assignments.show',['course_id'=>$assignment->course->id,'lecture_id'=>$lecture->id])}}" 
                                class="secondary-content">
                                <i class="material-icons">send</i>
                                </a>
                            </div>
                    </li>
                    
                @empty
                    <p class="center"> No assignments to check today</p>
                @endforelse 
                </ul>   
            </div>
        </div>
    </div>
</div>
@stop