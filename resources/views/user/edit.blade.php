@extends('layouts.layout')

@section('content')

<div class="container">
	<div>
		<h3>Редактирование отдела # - {{$user->name}}</h3>
		
		@include('errors')
		
		<div>
			<div>
				<form  action="{{route('users.update' , $user->id)}}" method="POST">

				@csrf
				@method('PUT')
			            <input class="text" type="text" name="name" value="{{$user->name}}" placeholder="Название Отдела">
			            <input class="go" type="submit" name="submit" value="Go">
        		</form>
			</div>
		</div>
	</div>
</div>
@endsection