@extends('layouts.layout')

@section('content')

<div class="container">
	<div>
		<h3>Название отдела</h3>
		<p>{{ $groups->name }}</p>

	</div>
</div>
@endsection