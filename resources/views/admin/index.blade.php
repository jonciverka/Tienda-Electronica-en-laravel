@extends('admin.menu')

@if(Session::has('message'))
  <div class="arribadetodo">
  	<div class="alert success ">
  			<span class="closebtn">&times;</span>  
  	    {{Session::get('message')}}
  	</div>
  </div>

@endif
  @section('form')
  	<table>
  		<thead>
  			<th>Nombre</th>
  			<th>Tipo</th>
  			<th>Correo</th>
  			<th>Operacion</th>
  		</thead>
  		@foreach($users as $user)
  		<tbody>
  			<td>{{$user->name}}</td>
  			<td>{{$user->tipo}}</td>
  			<td>{{$user->email}}</td>
  			<td>
  			{!!link_to_route('admin.edit', $title = "Editar", $parameters = [$user->id], $attributes = ['class'=>'waves-effect waves-light btn blue darken-3'])!!}	
  			</td>
  		</tbody>
  		@endforeach
  	</table>
    

@endsection
