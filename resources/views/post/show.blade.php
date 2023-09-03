@extends('layouts.main')
@section('content')

    <div>
        <div>{{$post->id}}.{{$post->title}}</div>
        <div>{{$post->content}}</div>
        <img src="{{$post->image}}" style="max-width: 300px">
        <div>{{$post->likes}} likes</div>
    </div>
    <div style="display: flex;justify-content: space-between;width: 300px">
        <form action="{{route('post.edit',$post->id)}}" method="get">
            <input type="submit" value="Edit" class="btn btn-primary">
        </form>

        <form action="{{route('post.delete',$post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-primary">
        </form>

        <form action="{{route('post.index')}}" method="get">
            <input type="submit" value="Back" class="btn btn-primary">
        </form>
    </div>

@endsection
