@extends('app.layout.main')


@section('bread')
    <a href="{{route('courses.index')}}" class="breadcrumb">Courses</a>
    <a href="{{route('courses.edit',['course_id'=>$course->id])}}" class="breadcrumb">{{$course->title}}</a>
    <a href="#!" class="breadcrumb">EditLecture</a>
@stop

@section('content')
    
    <div class="card">
             <div class="card-action">
                <div class="right">
                    <form action="{{route('courses.lectures.destroy',['course_id'=>$course->id,'lecture_id'=>$lecture->id])}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete')}}
                        <input type="submit" class="btn red lighten-1" value="delete">
                    </form>
                </div>
            </div>
        <form action="{{route('courses.lectures.update',['course_id'=>$course->id,'lecture_id'=>$lecture->id])}}" method="post">
            {{ csrf_field() }}
            {{ method_field('put')}}
            <div class="card-content">
            <span class="card-title">
                Introduce Lecture
            </span>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text" value="{{$lecture->title}}" name="title" placeholder="Lecture Title">
                            <label for="">Lecture Title</label>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text" value="{{Carbon\Carbon::parse($lecture->due_date)->format('d M,y')}}" class="datepicker" name="due_date">
                            <label for="">Due Date</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="input-field">
                                <textarea name="brief" id="" cols="30" rows="10" class="materialize-textarea"
                                          placeholder="Lecture Introduction">{{$lecture->brief}}</textarea>
                            <label for="">Lecture Introduction</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">
                                <textarea name="requirement" id="" cols="30" rows="10" class="materialize-textarea"
                                          placeholder="Lecture Requirements">{{$lecture->requirement}}</textarea>
                            <label for="">Lecture Requirements</label>
                        </div>
                    </div>

                    <div class="col s12 m12">
                        <div class="input-field">
                                <textarea name="body" id="" cols="30" rows="10" class="materialize-textarea"
                                          placeholder="Lecture Details">{{$lecture->body}}</textarea>
                            <label for="">Lecture Details</label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-action">
                <input type="submit" value="Update" class="btn">
                <input type="button" value="Cancel" class="btn grey">
            </div>
        </form>
    </div>


@stop
