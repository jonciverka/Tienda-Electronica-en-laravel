@extends('layouts.principal')
  @section('content')
  <div class="container paddingtop10">
  <div class="row"> 
 @foreach($Articulos as $Articulo)
      <div class="col s2 center-align">
        <img src="Articulos/{{$Articulo->path}}" class="responsive-img ">
        <p class="truncate">{{$Articulo->descripcion}}</p>    
        <p class="blue-text "><b>${{$Articulo->precio}}</b></p>         
      </div>
      @endforeach  
 </div>
</div>
@endsection