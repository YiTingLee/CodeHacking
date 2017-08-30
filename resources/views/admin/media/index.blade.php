@extends('layouts.admin')

@section('content')

    <h1>Media</h1>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($photos)
                @foreach($photos as $photo)
                    <tr>
                        <td>{{$photo->id}}</td>
                        <td><img height="50" src="{{$photo->file}}" alt=""></td>
                        <td>{{$photo->created_at->diffForHumans()}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}
                                <div class="form-group">
                                    {!! Form::submit('DELETE', ['class'=>'btn btn-danger']) !!}
                                </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@stop