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
						<td>ID</td>
						<td>Name</td>
						<td>Actions</td>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>1</td>
						<td>My title</td>
						<td>
							<a href="#">Просмотреть</a>
							<a href="#">Редактировать</a>
							<a href="#">Удалить</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection