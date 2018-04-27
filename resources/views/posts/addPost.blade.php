@extends('layouts.app')
@section('content')
<form method="POST" action="/store" enctype="multipart/form-data">
<input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
{!! csrf_field() !!}
<textarea class="form-control" name="text" id="text" rows="10" placeholder="Content">{{ old('content') }}</textarea>
<button class="form-control btn-success" type="submit" name="submit" id="submit">Submit</button>
@endsection