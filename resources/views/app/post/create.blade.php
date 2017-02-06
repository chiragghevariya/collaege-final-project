@extends('app.layout.main')


@section('content')




        <a href="{{Route('post.index')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>Back</a>



    <div class="post-form">

        <form method="post" action="{{route('post.store')}}">

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
                        <textarea class="form-control" rows="10" cols="10" name="description" required></textarea>

                    </div>

                </div>

            </div>


            <input type="submit" value="Create post" class="btn btn-primary">
            <a class="btn btn-danger" style=" margin-left: 1em" href="{{Route('post.index')}}">Cancle</a>

        </form>


    </div>




    @stop