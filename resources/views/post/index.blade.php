@extends('layouts.main')
@section('content')

    <div style="display: flex;justify-content: flex-start;flex-wrap: wrap;">
        @foreach($posts as $post)
            {{--            <div><a href="{{route('post.show' , $post->id)}}"> {{$post->id}}.{{$post->title}} </a></div>--}}

            <div class="card" style="width: 280px;margin:0 15px 15px 0;position: relative;height: 320px;">
                <img src="{{$post->image}}" class="card-img-top" style="height: 160px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text" style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;
overflow: hidden;">{{$post->content}}</p>
                    <a href="{{route('post.show' , $post->id)}}" style="position:absolute;bottom:0;
                    width: 80px;height: 30px;margin-bottom: 10px;" class="btn btn-primary">Open</a>
                </div>
            </div>

        @endforeach
    </div>
    <br>
    {{--    <div style="margin-left: 15px"><a href=""></a></div>--}}
    <a href="{{route('post.create')}}" class="btn btn-primary">Create post</a>

@endsection
