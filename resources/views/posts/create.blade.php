@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <div class="editor-container">
        <form method="POST" enctype="multipart/form-data" role="form" action="{{ route('posts.store') }}"}}>
        <div class="form-group">
            @csrf
            <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title"/>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
                <textarea class="form-control" name="body" cols="30" rows="10" placeholder="Body Text"></textarea>
        </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="cover_image" id="cover_image">
                <small class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection


