@extends('app.layout.main')


@section('content')




        <a href="{{Route('post.index')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>Back</a>



    <div style="margin-top: 5em">

        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">

            {{csrf_field()}}

            <div class="row">

                <div class="col-md-5">

                    <div class="form-group">

                        <label for="Title">Title:</label>
                        <input type="text" required class="form-control" name="title" placeholder="Write Post Title">

                    </div>

                </div>


                <div class="col-md-5">

                    <div class="form-group">

                        <label for="date">Date</label>
                        <input type="date" class="form-control" name="date" required>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-10">

                    <div class="form-group">

                        <label for="Title">Description</label>
                        <textarea class="form-control" rows="8" cols="10" name="description" required></textarea>

                    </div>

                </div>

            </div>


            <div class="row">

                <div class="col-md-10">

                    <div class="form-group">

                        <label for="semester">Select Result Image"</label>
                        <input type="file" name="photo" class="form-control" required>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-10">

                    <div class="form-group">

                        <input type="submit" value="Create post" class="btn light-blue darken-4">
                        <a class="btn red lighten-1" style=" margin-left: 1em" href="{{Route('post.index')}}">Cancle</a>

                    </div>


                </div>

            </div>

        </form>


    </div>




    @stop