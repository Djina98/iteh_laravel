@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align:center"><h1><i><strong>{{ __('Dashboard') }}</i></strong></h1></div>

                <div class="card-body">
                    <!--
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    -->
                    <p style="text-align:center"><a href="/posts/create" class="btn btn-outline-info">Create Post</a></p>
                    <hr>
                    <h4 style="text-align:center;color:rgb(202, 16, 202)"><strong>Your Blog Posts</strong></h4>
                    @if(count($posts) > 0)
                        <table class= "table table-hover">
                            
                            @foreach($posts as $post)
                                <tr>
                                    <td style="color:rgb(16, 128, 202)"><strong>{{$post->title}}</strong></td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-info">Edit</td>
                                    <td>
                                        {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-outline-info'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr> 
                            @endforeach
                        </table>
                    @else
                        <hr>
                        <h5>You have no posts</h5>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
