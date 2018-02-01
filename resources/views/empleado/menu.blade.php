@extends('layouts.nav')
  @section('content')
 <ul id="slide-out" class="side-nav fixed paddingtop">
      <li><a href="{!!URL::to('/empleado')!!}">Inicio.</a></li>  
      <li><a href="{!!URL::to('/empleado/create')!!}">Agregar Producto</a></li>      
    </ul>
    <div></div>
    <div class="padding-left">
	    @yield('form')
	   </div>
@endsection