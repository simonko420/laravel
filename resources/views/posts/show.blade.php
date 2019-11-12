@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
     <div>
         {{$post->body}}
     </div>
    <hr>
    <small>Written on {{$post->created_at->diffForHumans()}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit post</a>
            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <!-- edit button -->
                <button type="submit" class="btn btn-danger float-right">Delete</button>
            </form>
        @endif
    @endif
@endsection

