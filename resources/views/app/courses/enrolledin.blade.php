@extends('app.layout.main')

@section('bread')
    <a href="#!" class="breadcrumb">Courses</a>
@stop

@section('bread')
    <a href="#!" class="breadcrumb">Courses</a>
@stop

@section('content')
<div class="row">

    @foreach($courses as $course)
    <div class="col s6 m4 ">
            <div class="card">
        <div class="card-content">
            <div class="card-title">
                {{$course->title}}
            </div>
        </div>
        <div class="card-action">
            <a href="{{route('courses.resource',['id'=>$course->id])}}" class="btn light-blue darken-4">Resources</a>
            <button class="btn red lighten-1 "> Delete</button>
        </div>
        </div>
    </div>
    @endforeach  
    <div class="col s6 m4 card  light-blue lighten-4">
        <div class="card-content">
            <div class="card-title">
                New Course
            </div>
        </div>
        <div class="card-action">
            <a href="{{route('courses.create')}}" class="btn"> Create</a>
        </div>
    </div>
</div>

@stop
