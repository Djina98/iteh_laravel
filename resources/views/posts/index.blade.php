@extends('layouts.app')

@section('content')
    <h1 style="text-align:center"><i><strong>Blog Posts</i></strong></h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
                <div class="card p-3 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <br><br>
                            <h3 class="text-center"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <hr>
                            <h6 class="text-center">Category: {{$post->category}}</h6>
                            <br><br><br>
                            <p class="text-center"><small class="text-center">Written on {{$post->created_at}} by {{$post->user->name}}</small></p>
                        </div>
                    </div>   
                </div>
        @endforeach
        {{$posts->links('pagination::bootstrap-4')}}
    @else
        <p>No posts found</p>   
    @endif
@endsection