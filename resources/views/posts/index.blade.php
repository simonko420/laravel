@extends('layouts.app')

@section('content')
    <a class="btn btn-success" href="/posts/create" role="button">CREATE POST</a>
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="image">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                                <h6>by {{$post->user->name}}</h6>
                                <small>{{$post->created_at->diffForHumans()}}</small>
                            </div>
                        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif

@endsection

