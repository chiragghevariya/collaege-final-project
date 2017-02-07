@extends('home')

@section('content')

    <div style="width: 83%;margin:auto;margin-top: 3em" class="pull-right">


        <div class="container">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card">
                        <form action="{{url('login')}}" method="post">
                            {{ csrf_field() }}
                            <div class="card-content">
                                <span class="card-title">
                                    Login Here
                                </span>

                                <div class="input-field">
                                    <input type="text" name="email" placeholder="user@domain.com">
                                    <label class="active" for="">Email</label>
                                </div>

                                <div class="input-field">
                                    <input type="password" name="password" placeholder="">
                                    <label class="active" for="">Password</label>
                                </div>


                            </div>
                            <div class="card-action">
                                <input type="submit" class="btn grey" value="Login">
                                <p>Need To Register ? <a href=#> Click Here </a> </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




    </div>



    @stop