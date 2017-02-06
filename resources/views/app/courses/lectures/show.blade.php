@extends('app.layout.main')


@section('bread')
    <a href="{{route('courses.enrolled')}}" class="breadcrumb">Courses</a>
    <a href="{{route('courses.resource',['course_id'=>$course->id])}}" class="breadcrumb">{{$course->title}}</a>
    <a href="#!" class="breadcrumb">Lecture</a>
@stop

@section('content')
    
    <div class="card">
         
    
            <div class="card-content">
            <span class="card-title">
                Introduce Lecture
            </span>
                <div class="row">
                    <div class="col s12 m6">
                       {{$lecture->title}}
                    </div>
                    <div class="col s12 m6">
                        {{Carbon\Carbon::parse($lecture->due_date)->format('d M,y')}}
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6">
                       <pre> {{$lecture->brief}} </pre>
                    </div>
                </div>

                    <div class="col s12 m6">
                      <pre> {{$lecture->requirement}}   </pre>                     
                    </div>

                    <div class="col s12 m12">
                      {{$lecture->body}}
                    </div>

                </div>
            </div>
            <div class="card-action">
             
            </div>
        </form>
    </div>


@stop
