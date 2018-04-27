@extends('layouts.app')
@section('content')
<form method="POST" action="/edituserAction" enctype="multipart/form-data">
	<input class="form-control" type="text" name="name" id="name" placeholder="name" value="{{ $user->name }}">
	{!! csrf_field() !!}
	<input class="form-control" type="text" name="email" id="email" placeholder="email" value="{{ $user->email }}">
	<input class="form-control" type="text" name="password" id="password" placeholder="password" value="">
	<button class="form-control btn-success" type="submit" name="submit" id="submit">Submit</button>
	@endsection