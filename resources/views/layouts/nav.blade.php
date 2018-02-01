<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

  {!!Html::style('css/materialize.min.css')!!}
  {!!Html::style('https://fonts.googleapis.com/icon?family=Material+Icons')!!}
  {!!Html::style('css/mio.css')!!}

  <!-- Compiled and minified JavaScript -->
  
   {!!Html::script('https://code.jquery.com/jquery-3.2.1.min.js')!!}
   {!!Html::script('js/mio.js')!!}
   {!!Html::script('js/materialize.min.js')!!}


<body>
  <header>
    <ul id="dropdown1" class="dropdown-content">
  <li><a href="/logout">Salir</a></li>
</ul>
  <nav>
    <div class="nav-wrapper blue darken-3 arribadetodo" >
      <ul class="right hide-on-med-and-down">
        <li>{!!Auth::user()->name!!}</li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">arrow_drop_down</i>
        <i class="material-icons right">person</i></a></li>
      </ul>
    </div>
  </nav>
  </header>

    @yield('content')


</body>
</html>