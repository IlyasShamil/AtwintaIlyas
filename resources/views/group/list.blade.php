@extends('layouts.layout')

@section('content')

<div class="container">
	<div>
		<h3>Отделы</h3>
		<a style="border:2px solid;background-color: yellow;" href="{{route('groups.create')}}">Create</a>
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

					@foreach ($groups as $group)

						<tr>
							<td>{{$group->id}}</td>
							<td>{{$group->name}}</td>
							<td>
								<a href="{{route('groups.show' , $group->id)}}">Просмотреть</a>
								<a href="{{route('groups.edit', $group->id)}}">Редактировать</a>
								<form method="POST" action="{{route('groups.destroy' , $group->id)}}">
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