@extends('empleado.menu')
  @section('form')
    	<table>
  		<thead>
  			<th>Nombre</th>
  			<th>Precio</th>
  			<th>Descripcion</th>
  			<th>Imagen</th>
  		</thead>
  		@foreach($Articulos as $Articulo)
  		<tbody>
  			<td>{{$Articulo->name}}</td>
  			<td>{{$Articulo->precio}}</td>
  			<td>{{$Articulo->descripcion}}</td>
  			<td><img src="Articulos/{{$Articulo->path}}" style="width:200px;"></td>
  
  		</tbody>
  		@endforeach
  	</table>
 
@endsection
