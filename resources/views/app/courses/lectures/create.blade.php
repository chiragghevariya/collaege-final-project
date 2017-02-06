@extends('app.layout.main')


@section('bread')
    <a href="{{route('courses.index')}}" class="breadcrumb">Courses</a>
    <a href="{{route('courses.edit',['course_id'=>$course->id])}}" class="breadcrumb">{{$course->title}}</a>
    <a href="#!" class="breadcrumb">Add Lecture</a>
@stop

@section('content')

    <div class="card">
        <form action="{{route('courses.lectures.store',['id'=>$course->id])}}" method="post">
            {{ csrf_field() }}
            <div class="card-content">
            <span class="card-title">
                Introduce Lecture
            </span>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text" name="title" placeholder="Lecture Title">
                            <label for="">Lecture Title</label>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text" class="datepicker" name="due_date">
                            <label for="">Due Date</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="input-field">
                                <textarea name="brief" id="" cols="30" rows="10" class="materialize-textarea"
                                          placeholder="Lecture Introduction"></textarea>
                            <label for="">Lecture Introduction</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">
                                <textarea name="requirement" id="" cols="30" rows="10" class="materialize-textarea"
                                          placeholder="Lecture Requirements"></textarea>
                            <label for="">Lecture Requirements</label>
                        </div>
                    </div>

                    <div class="col s12 m12">
                        <div class="input-field">
                                <textarea name="body" id="" cols="30" rows="10" class="materialize-textarea"
                                          placeholder="Lecture Details"></textarea>
                            <label for="">Lecture Details</label>
                        </div>
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
