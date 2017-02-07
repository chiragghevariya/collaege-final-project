@extends('home')


@section('content')

    <div class="student pull-left" style="width:50%;border-right: dotted;">


        <h6 style="text-align: center;margin-bottom: 2em;font-weight: bold;font-size: medium"> If you are <u>Student</u> Sign Up below</h6>



        <form method="post" action="" style="padding:20px;margin-left: 2em;">

            {{--@if (count($errors) > 0)--}}
            {{--<div class="alert alert-danger">--}}
            {{--<ul>--}}
            {{--@foreach ($errors->all() as $error)--}}
            {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--@endif--}}

            {{csrf_field()}}


            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="name">Name</label>
                        <input type="text" required class="form-control" name="name" placeholder="FirstName and LastName" value="{{old("name")}}">

                    </div>


                </div>


                <div class="col-md-4">


                    <div class="form-group">

                        <label for="Email">Email</label>
                        <input type="email" required class="form-control" name="email" placeholder="xyz@gmail.com" value="{{old("email")}}">

                    </div>


                </div>


                <div class="col-md-4">

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" required name="phone" placeholder="+91" maxlength="10" value="{{old("phone")}}">
                    </div>


                </div>

            </div>


            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">
                        <label for="semester">select semester</label>
                        <select name="semester" class="form-control">
                            @for($i=1;$i<=10;$i++)
                                <option value="{{$i}}" {{(old("semester") == $i ? "selected":"")}}>semester {{$i}}</option>
                            @endfor
                        </select>
                    </div>


                </div>


                <div class="col-md-4">

                    <div class="form-group">
                        <label for="Enroll">Enroll</label>
                        <input type="text" maxlength="12" name="enroll" required class="form-control" placeholder="Enter your Enrollment Number" value="{{old("enroll")}}">
                    </div>


                </div>


                <div class="col-md-4">

                    <div class="form-group">
                        <label for="department">Department</label>
                        <select name="department_id" class="form-control">

                            <option value="">select department</option>

                        </select>

                    </div>


                </div>

            </div>


            <div class="row">

                <div class="col-md-12">

                    <div class="form-group">
                        <label for="address">Address</label>
                        {{--<input type="text" name="address" class="form-control" placeholder="Enter Your address">--}}

                        <textarea rows="5" cols="50" name="address" required class="form-control" placeholder="Enter your Address for proof">{{old("address")}}</textarea>

                    </div>


                </div>

            </div>


            <div class="row">

                <div class="col-md-12">

                    <div class="form-group">

                        <label for="password">password</label>
                        <input type="password" class="form-control" required name="password" placeholder="Create your password">

                    </div>


                </div>

            </div>



            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">

                        <input type="submit" class="btn light-blue darken-4" value="submit">
                        <button class="btn red lighten-1"><a href="">Calcle</a></button>


                    </div>

                </div>
            </div>




        </form>



    </div>

    <div class="faculty pull-right" style="width: 50%">

        <p style="text-align: center;margin-bottom: 2em;font-weight: bold;font-size: medium"> If you are <u>Faculty</u> Sign Up below</p>


        <form method="post" action="" style="padding:20px;margin-right: 2em">

        {{csrf_field()}}

                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">

                            <label for="name">Name</label>
                            <input type="name" class="form-control" name="name" placeholder="Write Full Name" value="{{old("name")}}" required >

                        </div>


                    </div>

                    <div class="col-md-4">

                        <div class="form-group">

                            <label for="Email">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="xyz@gmail.com" value="{{old("email")}}" required>
                        </div>


                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="department">Department:</label>
                            <select name="department_id" class="form-control">
                                    <option value=""></option>
                            </select>

                        </div>

                    </div>

                </div>

    <div class="row">

        <div class="col-md-6">

            <div class="form-group">

                <label for="Info">Your Info:</label>
                <textarea rows="5" cols="50" name="info" class="form-control" placeholder="Enter about your self or about you" required>{{old("info")}}</textarea>

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">
                <label for="address">Address</label>
                {{--<input type="text" name="address" class="form-control" placeholder="Enter Your address">--}}

                <textarea rows="5" cols="50" required name="address" class="form-control" placeholder="Enter your Address for proof">{{old("address")}}</textarea>

            </div>


        </div>

    </div>


    <div class="row">

        <div class="col-md-12">


            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" name="phone" placeholder="+91" maxlength="10" value="{{old("phone")}}" required>
            </div>


        </div>

    </div>

    <div class="row">

        <div class="col-md-12">


            <div class="form-group">

                <label for="password">password</label>
                <input type="password" class="form-control" name="password" placeholder="Create your password" required>

            </div>



        </div>

    </div>

    <div class="form-group">


        <input type="submit" class="btn light-blue darken-4" value="submit">
        <button class="btn red lighten-1"><a href="">Calcle</a></button>

    </div>


    </form>



    </div>





@stop