@extends('admin.menu')
  @section('form')
  @include('alerts.request')
  <div class="row">
    {!!Form::model($user,['route'=>['admin.update',$user->id],'method'=>'PUT'])!!}
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
      {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
  </div>
  <div>
  {!!Form::open(['route'=>['admin.destroy',$user->id],'method'=>'DELETE'])!!}
  {!!Form::submit('Eliminar',['class'=>'btn btn-primary red darken-2'])!!}
  {!!Form::close()!!}
  </div>
@endsection