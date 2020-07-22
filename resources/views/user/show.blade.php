@extends('layouts.layout')

@section('content')

<div class="container">
	<div>
		<h3>Пользователь</h3>
		<p>{{ $users->name }}</p>

	</div>
</div>
@endsection