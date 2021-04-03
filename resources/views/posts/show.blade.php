@extends('layouts.app')

@section('content')
    <h1 class="text-center">{{$post->title}}</h1>
    <hr>
    <br><br>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <p class="text-center"><small>Writen on {{$post->created_at}} by {{$post->user->name}}</small></p>
    <hr>
    
    @if(!Auth::guest())
    <a href="/posts" class="btn btn-primary">Go Back</a>
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-primary'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection