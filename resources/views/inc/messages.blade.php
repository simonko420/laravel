@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> You successfully created post.
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-success" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
        {{session('error')}}
    </div>

@endif
