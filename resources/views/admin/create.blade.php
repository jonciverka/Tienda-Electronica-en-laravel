@extends('admin.menu')
  @section('form')
  @include('alerts.request')

  <div class="row">
    {!!Form::open(['route'=>'admin.store','method'=>'POST'])!!}
       <div class="row">
        {!!Form::text('name',null,['class'=>'input-field col  s12','placeholder'=>'Nombre'])!!}
      </div>
       <div class="row">
        {!!Form::text('email',null,['class'=>'input-field col s12','placeholder'=>'Correo'])!!}
      </div>  
      <div class="row">
        {!!Form::password('password',['class'=>'input-field col s12','placeholder'=>'Password'])!!}
        
      </div>   
      <div class="row">
        <select class="browser-default" name="tipo">
          <option value="" disabled selected>Tipo de Usuario</option>
          <option value="1">Administrador</option>
          <option value="2">Empleado</option>
          <option value="3">Usuario</option>
        </select>
      </div>
      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
  </div>
@endsection