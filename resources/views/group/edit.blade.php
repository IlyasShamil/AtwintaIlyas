@extends('layouts.layout')

@section('content')

<div class="container">
	<div>
		<h3>Создание Отдела # - {{$group->name}}</h3>
		
		@include('errors')
		
		<div>
			<div>
				<form  action="{{route('groups.update' , $group->id)}}" method="POST">

				@csrf
				@method('PUT')
			            <input class="text" type="text" name="name" value="{{$group->name}}" placeholder="Название Отдела">
			            <input class="go" type="submit" name="submit" value="Go">
        		</form>
			</div>
		</div>
	</div>
</div>
@endsection