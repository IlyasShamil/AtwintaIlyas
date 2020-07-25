@extends('layouts.layout')

@section('content')

<div class="container">
	<div>
		<h3>Редактирование пользователя # - {{$user->name}}</h3>
		
		@include('errors')
		
		<div>
			<div>
				<form  action="{{route('users.update' , $user->id)}}" method="POST">

				@csrf
				@method('PUT')
			            <p>Name <input class="text" type="text" name="name" value="{{$user->name}}" placeholder="Имя пользователя"></p>
			            <p>Email <input class="text" type="text" name="email" value="{{$user->email}}" placeholder="Имя пользователя"></p>
			            <p>password <input class="text" type="text" name="password" value="{{$user->password}}" placeholder="Имя пользователя"></p>
			            <p>id_group <input class="text" type="text" name="id_group" value="{{$user->id_group}}" placeholder="Имя пользователя"></p>
			            <input class="go" type="submit" name="submit" value="Go">
        		</form>
			</div>
		</div>
	</div>
</div>
@endsection