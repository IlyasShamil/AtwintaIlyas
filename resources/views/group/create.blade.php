@extends('layouts.layout')

@section('content')

<div class="container">
	<div>
		<h3>Создание Отдела</h3>
		
		@include('errors')
		
		<div>
			<div>
				<form  action="{{route('groups.store')}}" method="POST">
		@csrf
            <input class="text" type="text" name="name" value="{{old('name')}}" placeholder="Название Отдела">
            <input class="go" type="submit" name="submit" value="Go">
        </form>
			</div>
		</div>
	</div>
</div>
@endsection