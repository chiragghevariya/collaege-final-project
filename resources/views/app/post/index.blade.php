@extends('app.layout.main')


@section('content')


    <div style="margin-bottom: 5em">

        <a href="{{route('post.create')}}" class="btn pull-right">Add Post</a>

    </div>

    <div class="row">

        {{--@foreach($post as $post)--}}
            {{--<div class="col s2 m4"></div>--}}
                {{--<div class="panel" style="width: 30%;border: 1px solid blue">--}}

                    {{--<div class="page-header">--}}

                        {{--<p style="text-align: center">{{$post->title}}</p>--}}

                    {{--</div>--}}

                    {{--<div class="panel-body">--}}
                        {{--<p style="text-align: center">Created Date :</p>--}}
                    {{--</div>--}}

                    {{--<div class="panel-footer">--}}

                        {{--<a class="btn light-blue darken-4">Update</a>--}}
                        {{--<a class="btn red lighten-1">Delete</a>--}}

                    {{--</div>--}}

                {{--</div>--}}

            {{--</div>--}}
        @foreach($post as $post)

        <div class="col s6 m4 ">
            <div class="card">
                <div class="card-content">
                    <div class="card-title">
                        <p style="text-align: center">{{$post->title}}</p>
                        <h6 class="pull-right" style="margin-bottom:2em">created Date:{{$post->date}}</h6>
                    </div>
                </div>
                <div class="card-action">
                    <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn light-blue darken-4">Update</a>
                    <button class="btn red lighten-1 "> Delete</button>
                </div>
            </div>
        </div>


        @endforeach

    </div>




@stop