@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data" method="POST" >
        <div class="form-group">
            @method('PUT')
            @csrf
            <label for="title">Title</label>
            <input type="text" class="form-control" value="{{ $post->title }}" name="title" placeholder="Title"/>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="article-ckeditor" class="form-control" name="body" cols="30" rows="10" placeholder="Detail">{{ $post->body }}</textarea>
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file" name="cover_image" id="cover_image">
            <small class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
    @csrf
    @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
