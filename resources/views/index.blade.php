@extends('layouts.principal')
  @section('content')

<div class="">
  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="img/1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="img/2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="img/3.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="img/4.jpg"></a>
  </div>
   </div>     

<div class="container">
  <div class="row">      
      <div class="col s10 ">
      <p><b>Lo mas vendidoss.</b></p>
      <div class="divider"></div>
      <section class="variable">
        @foreach($slices as $slice)
        <div>
          <img src="Articulos/{{$slice->path}}" class="responsive-img ">
        </div>
        @endforeach

      </section>
      <p><b>Nuestros Productos</b></p>
      <div class="divider"></div>
      @foreach($Articulos as $Articulo)
      <div class="col s3 center-align">
        <img src="Articulos/{{$Articulo->path}}" class="responsive-img ">
        <p class="truncate">{{$Articulo->descripcion}}</p>    
        <p class="blue-text "><b>${{$Articulo->precio}}</b></p>         
      </div>
      @endforeach  
      
    </div>  
    <div class="col s2  grey lighten-4" >
      <div class="center-align"><img class="responsive-img " src="img/ofertas.png"></div>
      <div class="container">       
      <div class="center-align"><img class="responsive-img arriba " src="img/oferta1.png"></div>
      <div class="divider"></div>
      <div class="center-align"><img class="responsive-img arriba " src="img/oferta2.png"></div>
      <div class="divider"></div>
      <div class="center-align"><img class="responsive-img arriba " src="img/oferta3.png"></div>
      <div class="center-align"><img class="responsive-img arriba " src="img/oferta4.png"></div>
      <div class="divider"></div>
      <div class="center-align"><img class="responsive-img arriba " src="img/oferta5.png"></div>
      </div>
    </div>
  </div>
  
   
</div>
@endsection