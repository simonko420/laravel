@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}" alt="image">
    <div>
        <p class="h4"> {{$post->body}}</p>
    </div>
    <hr>
    <small class="text-muted">Written {{$post->created_at->diffForHumans()}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit post</a>
            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @endif
    @endif
@endsection

