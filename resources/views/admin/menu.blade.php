@extends('layouts.nav')
  @section('content')
  
 <ul id="slide-out" class="side-nav fixed paddingtop">
      <li><a href="{!!URL::to('/admin/productos')!!}">Agregar Producto.</a></li>
      <li><a href="{!!URL::to('/admin/create')!!}">Agregar Empleado/Cliente.</a></li> 
      <li><a href="{!!URL::to('/admin')!!}">Eliminar/Editar.</a></li> 
  </ul>
  
  <div class="row">
	   <div class="padding-left arribadetodo">
	    @yield('form')
	   </div>
	</div>
@endsection