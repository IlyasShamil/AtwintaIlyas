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
            <select class="scroll" name="role">
            @foreach ($roles as $role)
            
	            <option value="{{$role->id}}">{{$role->name}}</option>
            
            @endforeach
            </select>
            Если Сотрудник
            <select class="scroll" name="group">
            @foreach ($groups as $group)
            
	            <option value="{{$group->id}}">{{$group->name}}</option>
            
            @endforeach
            </select>
	        <input class="go" type="submit" name="submit" value="Go">
        </form>
			</div>
		</div>
	</div>
</div>
@endsection