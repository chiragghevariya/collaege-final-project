@extends('app.layout.main')


@section('bread')
    <a href="{{route('courses.index')}}" class="breadcrumb">Courses</a>
    <a href="{{route('courses.edit',['course_id'=>$course->id])}}" class="breadcrumb">{{$course->title}}</a>
    <a href="{{route('courses.assignments.index',['course_id'=>$course->id])}}" class="breadcrumb">Assignment</a>
    <a href="#!" class="breadcrumb">Add Assignment</a>
@stop

@section('content')

    <div class="card">
        <form action="{{route('courses.assignments.store',['id'=>$course->id])}}" method="post">
            {{ csrf_field() }}
            <div class="card-content">
            <span class="card-title">
                Introduce Assignment
            </span>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text" name="title" placeholder="Lecture Title">
                            <label for="">Assignment Title</label>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text" class="datepicker" name="due_date">
                            <label for="">Due Date</label>
                        </div>
                    </div>
                </div>
                
        

            <div class="card-action">
                <input type="submit" value="Add" class="btn">
                <input type="button" value="Cancel" class="btn grey">
            </div>
         </form>
    </div>


@stop
