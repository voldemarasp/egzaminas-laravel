@extends('layouts.app')
@section('content')
<form method="POST" action="/updateAction/{{ $post->id }}" enctype="multipart/form-data">
<input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{ $post->title }}">
{!! csrf_field() !!}
<textarea class="form-control" name="text" id="text" rows="10" placeholder="Content">{{ $post->text }}</textarea>
<button class="form-control btn-success" type="submit" name="submit" id="submit">Submit</button>
@endsection