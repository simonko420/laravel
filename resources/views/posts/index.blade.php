@extends('layouts.app')

@section('content')
    <a class="btn btn-success" href="/posts/create" role="button">CREATE POST</a>
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
           <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                        <h6 class="card-subtitle">by {{$post->user->name}}</h6>
                        <small>{{$post->created_at->diffForHumans()}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif

@endsection

