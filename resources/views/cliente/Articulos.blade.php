@extends('layouts.index_cliente')
  @section('conte')
  <div class="container paddingtop10">
  <div class="row"> 
 @foreach($Articulos as $Articulo)
      <div class="col s2 center-align">

        <img src="{{ asset('Articulos/' . $Articulo->path) }}" class="responsive-img ">
        
        <p class="truncate">{{$Articulo->descripcion}}</p>    
        <p class="blue-text "><b>${{$Articulo->precio}}</b></p> 
        {!!Form::open(['route'=>'cliente.store','method'=>'POST'])!!}
       <div class="row">
        {!!Form::Hidden('id',$Articulo->id,['class'=>'input-field col s12','placeholder'=>'Nombre'])!!}
      </div>
      {!!Form::submit('ADD TO CAR',['class'=>'btn waves-effect waves-light orange darken-3 col s12'])!!}
    {!!Form::close()!!}             
      </div>

      @endforeach  
 </div>
</div>
@endsection