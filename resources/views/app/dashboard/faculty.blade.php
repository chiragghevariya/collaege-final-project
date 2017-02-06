@extends('app.layout.main')


@section('content')

<div class="row">
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <span class="card-title">
                    Today's Lectures
                </span>        
                <ul class="collection">
                @forelse($lectures as $lecture)
                    <li class="collection-item dismissable">
                            <div>{{ $lecture->title}} {{ $lecture->course->title}}
                                <a href="{{route('courses.lectures.edit',['course_id'=>$lecture->course->id,'lecture_id'=>$lecture->id])}}" 
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
                @forelse($assignments as $assignment)
                    <li class="collection-item dismissable">
                            <div>{{ $assignment->title}} {{ $assignment->course->title}}
                                <a href="{{route('courses.assignments.edit',['course_id'=>$assignment->course->id,'lecture_id'=>$lecture->id])}}" 
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