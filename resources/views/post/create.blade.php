@extends('layouts.main')
@section('content')

    <form style="max-width: 350px;margin-left: 20px" action="{{route('post.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="textarea" name="content" class="form-control" id="content" placeholder="Content">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image">
        </div>
        <label for="customRange2" class="form-label">Likes</label>
        <input type="range" name="likes" class="form-range" min="0" max="100" id="customRange2">
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection
