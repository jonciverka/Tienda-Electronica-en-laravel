@extends('empleado.menu')
  @section('form')
  <div class="row">
   {!!Form::open(['route'=>'empleado.store', 'method'=>'POST','files' => true])!!}
       <div class="row">
        {!!Form::text('name',null,['class'=>'input-field col  s12','placeholder'=>'Inserte Nombre del articulo'])!!}
      </div>
      <div class="row">
        {!!Form::text('precio',null,['class'=>'input-field col  s12','placeholder'=>'Inserte precio del articulo'])!!}
      </div>
      <div class="row">
        {!!Form::text('descripcion',null,['class'=>'input-field col  s12','placeholder'=>'Inserte descripcion del articulo'])!!}
      </div>
        <div class="row">
        {!!Form::file('path')!!}
      </div>
      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
  </div>
@endsection
