@extends('layouts.main')
@section('content')

    <form style="max-width: 350px;margin-left: 20px" action="{{route('post.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                   value="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="textarea" name="content" class="form-control" id="content" placeholder="Content"
                   value="{{$post->content}}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image"
                   value="{{$post->image}}">
        </div>
        <label for="customRange2" class="form-label">Likes</label>
        <input type="range" name="likes" class="form-range" min="0" max="100" id="customRange2"
               value="{{$post->likes}}">
        <button type="submit" class="btn btn-primary">Update</button>
        <button class="btn btn-primary"><a  style="text-decoration: none;color: white" href="{{route('post.show',$post->id)}}">Back</a></button>
    </form>

@endsection
