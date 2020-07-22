@extends('layouts.layout')

@section('content')

<div class="container">
	<div>
		<h3>Создание Отдела</h3>
		
		@include('errors')
		
		<div>
			<div>
				<form  action="{{route('users.store')}}" method="POST">
		@csrf
            <input class="text" type="text" name="name" value="{{old('name')}}" placeholder="Name">
            <input class="text" type="text" name="email" value="{{old('email')}}" placeholder="Email">
            <input class="text" type="password" name="password" value="{{old('password')}}" placeholder="Password">
            <input class="go" type="submit" name="submit" value="Go">
        </form>
			</div>
		</div>
	</div>
</div>
@endsection