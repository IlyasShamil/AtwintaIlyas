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

						Это страница 
						<h3 style="background-color: yellow; margin:4px;">Cотрудника</h3>. 
						Привет {{ Auth::user()->name }} {{ Auth::user()->id_group  }}

						<!-- ADMIN -->
						@if (Auth::user()->name == 'admin')
							<?php $id = 1 ?>

								<div style="border: 2px solid black; margin-top: 10px;">
								@foreach($group as $group)
									<h2 style="background-color: red;">
										{{$group->name}}
									
									</h2>

									@foreach ($name_user as $name)

										@if ($name->id_group == $group->id)

										<li>{{$name->name}}</li>

										@endif

									@endforeach
								@endforeach
								</div>
						@endif

						@if (Auth::user()->id_group == 1 )
							<div style="border: 2px solid black">
								<h2 style="background-color: red;">

									{{$group->where('id' , Auth::user()->id_group)->first()->name}}
								
								</h2>

								@foreach ($name_user as $name)

									@if ($name->id_group == 1)

										<li>{{$name->name}}</li>

									@endif

								@endforeach
							</div>
						@endif

						@if (Auth::user()->id_group == 2)

							<div style="border: 2px solid black">
								<h2 style="background-color: red;">
									{{$group->where('id' , Auth::user()->id_group)->first()->name}}
								</h2>

								@foreach ($name_user as $name)

									@if ($name->id_group == 2)

										<li>{{$name->name}}</li>
									
									@endif

								@endforeach
							</div>
						@endif					
					</div>
				</div>
			</div>
		</div>
	</div>