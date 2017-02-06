@extends('app.layout.main')


@section('bread')
    <a href="{{route('courses.index')}}" class="breadcrumb">Courses</a>
    <a href="#!" class="breadcrumb">Introduce</a>

@stop

@section('content')

    <div class="card">
        <form action="{{route('courses.store')}}" method="post">
            {{ csrf_field() }}
        <div class="card-content">
            <span class="card-title">
                Introduce Coures
            </span>
                <div class="row">
                    <div class="col s6 m3">
                        <div class="input-field">
                            <input type="text" name="title" placeholder="Course Title">
                            <label for="">Course Title</label>
                        </div>
                    </div>

                    <div class="col s6 m3">
                        <div class="input-field">
                            <input type="text" name="code" placeholder="Course Code">
                            <label for="">Course Code</label>
                        </div>
                    </div>

                    <div class="col s6 m1">
                        <div class="input-field">
                            <input type="text" name="credit" placeholder="Course Credit">
                            <label for="">Course Credit</label>
                        </div>
                    </div>

                       <div class="col s6 m1">
                        <div class="input-field">
                            <input type="text" name="lectures_a_week" placeholder="Course Lecture A Week">
                            <label for="">Course Credit</label>
                        </div>
                    </div>

                    <div class="col s6 m1">
                        <div class="input-field">
                            <input type="text" name="sem" placeholder="Course Semester">
                            <label for="">Course Semester</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">
                            <textarea name="brief" id="" cols="30" rows="10" class="materialize-textarea" placeholder="Brief Introduction"></textarea>
                            <label for="">Course Introduction</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">
                            <textarea name="requirement" id="" cols="30" rows="10" class="materialize-textarea" placeholder="Course Requirements"></textarea>
                            <label for="">Course Requirements</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">
                            <textarea name="message" id="" cols="30" rows="10" class="materialize-textarea" placeholder="Message"></textarea>
                            <label for="">Message From Instructor</label>
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
