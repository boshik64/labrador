@extends('layouts.main')
@section('content')

    <form style="max-width: 350px;margin-left: 20px" action="{{route('post.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text"
                   value="{{old('title')}}"
                   name="title" class="form-control" id="title" placeholder="Title">

            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="textarea"
                   value="{{old('content')}}"
                   name="content" class="form-control" id="content" placeholder="Content">

            @error('content')
            <p class="text-danger">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text"
                   value="{{old('image')}}"
                   name="image" class="form-control" id="image" placeholder="Image">

            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror

        </div>

        <label for="customRange2" class="form-label">Likes</label>
        <input type="range" name="likes" class="form-range" min="0" max="100" id="customRange2">

        <select class="form-select" style="margin-bottom: 15px" aria-label="Category" id="category" name="category_id">
            @foreach($categories as $category)
                <option
                    {{ old('category_id') == $category->id ? ' selected' : '' }}
                    value="{{$category->id}}">{{$category->title}}</option>
            @endforeach


        </select>


        <select class="form-select" id="tags" name="tags[]" multiple aria-label="multiple select example">
            @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->title}}</option>
            @endforeach
        </select>


        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection
