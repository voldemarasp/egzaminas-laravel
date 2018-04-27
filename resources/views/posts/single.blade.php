@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 mt-5"> 
			{{ $posts->title }}
			<hr>
			{{ $posts->text }}
			<hr>
			{{ $posts->date }}
			<hr>
			@auth
			<a href="{{ url('editPost/') }}/{{ $posts->id }}">Edit post</a>
			<a href="{{ url('deletePost/') }}/{{ $posts->id }}">Delete post</a>
			@endauth
			<hr>
			Author: <a href="{{ url('userPost/') }}/{{ $author->id }}">{{ $author->name }}</a>
		</div>
	</div>
</div>
@endsection