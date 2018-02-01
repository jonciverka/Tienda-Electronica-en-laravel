@extends('layouts.index_cliente')
  @section('conte')
  <?php $arr = 0;
  ?>
	
	<table>
  		<thead>
  			<th>Imagen</th>
  			<th>Description</th>
  			<th>Precio</th>	
        
  		</thead>    	
  		@foreach($Lis as $Li)
  		@foreach($Articulos as $Articulo)
  		@if($Articulo->id == $Li)  		
    	<tbody>
  			<td><img src="{{ asset('Articulos/'.$Articulo->path)}}" class="responsive-img" style="width: 20%; height: 30%;"></td>
  			<td>{{$Articulo->descripcion}}</td>
  			<td>${{$ar=$Articulo->precio}}</td>  
        
        
        
        <?php 
        $arr = $ar + $arr ?> 

  		</tbody>
  		@endif
  		@endforeach
  		@endforeach

      <td><b>Total</b></td>
    <td></td>
    <td><b>${{$arr}}</b></td>
  	</table>

    
  	 
  	@endsection
      


