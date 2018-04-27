@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($posts as $post)

        <div class="col-12 mt-5"> 
            <a href="{{ url('singlePost/') }}/{{ $post->id }}">{{ $post->title }}</a>
            <hr>
            {{ $post->text }}
            <hr>
            {{ $post->date }}
            <hr>
            @auth
            <a href="{{ url('editPost/') }}/{{ $post->id }}">Edit post</a>
            <a href="{{ url('deletePost/') }}/{{ $post->id }}">Delete post</a>
            @endauth
        </div>
        @endforeach
        <div class="col-12 mt-5 d-flex justify-content-center"> 
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection