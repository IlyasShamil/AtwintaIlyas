@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">

					<div class="card-body">
						@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
						@endif

						@if (Auth::user()->name == 'admin')
								<div style="border: 2px solid black; margin-top: 10px;">						
									<table>											
										@foreach($groups as $group)
											
											<tr>
												<td>{{$group->id}}.</td>
												<td>{{$group->name}}</td>
											</tr>

										@endforeach
									</table>
								</div>
						@endif
						@if (!isset(Auth::user()->id_group) )
							<div style="border: 2px solid black">
								<table>											
									@foreach($groups as $group)
										
										<tr>
											<td>{{$group->id}}.</td>
											<td>{{$group->name}}</td>
										</tr>

									@endforeach
								</table>
							</div>
						@endif

						Это страница <p style="background-color: yellow;">Пользователя</p>. Привет {{ Auth::user()->name }}

						
					</div>
				</div>
			</div>
		</div>
	</div>