@extends('layouts.layout')

@section('content')

<div class="container">
	<div>
		<h3>Пользователь</h3>
		<p><label style="font-size:18px">id</label> {{ $users->id }}</p>
		<p><label style="font-size:18px">name</label> {{ $users->name }}</p>
		<p><label style="font-size:18px">email</label> {{ $users->email }}</p>
		<p><!-- <label style="font-size:18px">password</label> {{ $users->password }} --></p>
		<p>
			@if(isset($users->id_group))
			<label style="font-size:18px">Отдел</label>
			{{ $group->where('id',$users->id_group)->first()->name}}
			@endif
		</p>
		
		<!-- $group->where('id' , $id)->first()->name -->

	</div>
</div>
@endsection