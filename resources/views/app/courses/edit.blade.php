@extends('app.layout.main')


@section('bread')
     <a href="{{route('courses.index')}}" class="breadcrumb">Courses</a>
    <a href="#!" class="breadcrumb">{{ $course->title }}</a>

@stop

@section('content')

    <div class="card">        
        <div class="card-content">
            <span class="card-title">
                Resources
            </span>
        </div>
        <div class="card-action">            
                <a  href="{{route('courses.lectures.index',['course_id'=>$course->id])}}" 
                    class="btn" 
                    >Lectures</a>
                  <a  href="{{route('courses.assignments.index',['course_id'=>$course->id])}}" 
                    class="btn" 
                    >Assignments</a>   
        </div>
    </div>
    

    <div class="card">
        <form action="{{route('courses.update',['course_id'=>$course->id])}}" method="post">
            {{ csrf_field() }}
            <div class="card-action">
                <div class="right">
                    <input type="submit" value="Update" class="btn">
                    <input type="button" value="Cancel" class="btn grey">
                </div>
        </div>
        <div class="card-content">
            <span class="card-title">
                 Coures Details
            </span>
                <div class="row">

                    <div class="col s6 m3">
                        <div class="input-field">
                            <input type="text" name="title"  value="{{ $course->title }}"placeholder="Course Title">
                            <label for="">Course Title</label>
                        </div>
                    </div>

                    <div class="col s6 m3">
                        <div class="input-field">
                            <input type="text" name="code" value="{{ $course->code }}" placeholder="Course Code">
                            <label for="">Course Code</label>
                        </div>
                    </div>

                    <div class="col s6 m1">
                        <div class="input-field">
                            <input type="text" name="credit" value="{{ $course->credit }}" placeholder="Course Credit">
                            <label for="">Course Credit</label>
                        </div>
                    </div>

                    <div class="col s6 m1">
                        <div class="input-field">
                            <input type="text" name="lectures_a_week" value="{{ $course->lectures_a_week }}" placeholder="Course Lecture A Week">
                            <label for="">Course Credit</label>
                        </div>
                    </div>

                    <div class="col s6 m1">
                        <div class="input-field">
                            <input type="text" name="sem"value="{{ $course->sem }}" placeholder="Course Semester">
                            <label for="">Course Semester</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">
                            <textarea name="brief" id="" cols="30" rows="10" class="materialize-textarea" placeholder="Brief Introduction">
                                {{ $course->brief }}
                            </textarea>
                            <label for="">Course Introduction</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">
                            <textarea name="requirement" id="" cols="30" rows="10" class="materialize-textarea" placeholder="Course Requirements">
                                {{ $course->requirement }}
                            </textarea>
                            <label for="">Course Requirements</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">
                            <textarea name="message" id="" cols="30" rows="10" class="materialize-textarea" placeholder="Message">
                                {{ $course->message }}
                            </textarea>
                            <label for="">Message From Instructor</label>
                        </div>
                    </div>

               </div>

        </div>
        
        </form>
    </div>




@stop
