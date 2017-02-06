@extends('app.layout.main')


@section('content')


    <div class="add-department">


        <a class="btn btn-primary pull-right" href="{{Route('result.create')}}"><span><i class="fa fa-plus" aria-hidden="true"></i></span>Add result</a>


    </div>

    <div class="department-table" style="margin-top: 5em">

        <table class="table table-hover table-striped table-responsive tableinfo" >

            <tr>

                <th>Id</th>
                <th>Title</th>
                <th>Semester</th>
                <th>Spi</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>

            @foreach($result as $result)

                <tr>
                    <td>{{$result->id}}</td>
                    <td>{{$result->title}}</td>
                    <td>{{$result->semester}}</td>
                    <td>{{$result->spi}}</td>
                    <td><a class="btn light-blue darken-4" href="{{route('result.edit',['id'=>$result->id])}}">Edit</a></td>
                    <td>
                        <form method="post" action="{{Route('result.destroy',['id'=>$result->id])}}">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            <input type="submit" value="Delete" class="btn red lighten-1">
                        </form>
                    </td>

                </tr>

            @endforeach

        </table>

    </div>




@stop