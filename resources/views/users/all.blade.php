@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">


		@foreach ($users as $user) 
		<div class="col-12 mt-5"> 
			<a href="userPost/{{ $user->id }}">{{ $user->name }}</a>
		</div>
		@endforeach
	</div>
</div>
@endsection