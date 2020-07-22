@extends('layouts.layout')

@section('content')

<div class="container">
	<div>
		<h3>Отделы</h3>
		<a style="border:2px solid;background-color: yellow;" href="{{route('users.create')}}">Create</a>
		<div>
			<table>
				<thead>
					<tr>
						<td>Id</td>
						<td>Name</td>
						<td>Actions</td>
					</tr>
				</thead>

				<tbody>

					@foreach ($users as $user)

						<tr>
							<td style="border:2px solid">{{$user->id}}</td>
							<td>{{$user->name}}</td>
							<td>
								<a href="{{route('users.show' , $user->id)}}">Просмотреть</a>
								<a href="{{route('users.edit', $user->id)}}">Редактировать</a>
								<form method="POST" action="{{route('users.destroy' , $user->id)}}">
									@csrf
									@method('DELETE')
									<button onclick="return confirm('Are you sure?')">Удалить</button>
								</form>

								<!-- <a href="#">Удалить</a> -->
							</td>
						</tr>

					@endforeach

				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection