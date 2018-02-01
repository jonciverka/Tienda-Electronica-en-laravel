<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
   <script src="js/mio.js"></script>
   <script src="js/index.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

</head>


<body>
@if(Session::has('message-error'))
  <div class="arribadetodo">
  	<div class="alert warning ">
  			<span class="closebtn">&times;</span>  
  	    {{Session::get('message-error')}}
  	</div>
  </div>

@endif
	<div id="login">

		<h5><strong> Iniciar Sesion.</strong></h5>

			{!!Form::open(['route'=>'log.store','method' => 'POST'])!!}
			<div class="form-group">
					
				{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa correo'])!!}
			</div>

			<div class="form-group">
				
				{!!Form::password('password',['class'=>'form-control 	','placeholder'=>'Ingresa contraseña'])!!}
			</div>
			{!!Form::submit('Iniciar',['class'=>'waves-effect waves-light btn blue darken-3'])!!}
			{!!Form::close()!!}

		

	</div> <!-- end login -->



</body>
</html>
  
  
</body>
</html>
