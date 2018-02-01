<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!-- Compiled and minified CSS -->
  {!!Html::style('css/materialize.min.css')!!}
  {!!Html::style('https://fonts.googleapis.com/icon?family=Material+Icons')!!}
  {!!Html::style('css/mio.css')!!}
  {!!Html::style('./slick/slick.css')!!}
  {!!Html::style('./slick/slick-theme.css')!!}
  <!-- Compiled and minified JavaScript -->
  
   {!!Html::script('https://code.jquery.com/jquery-3.2.1.min.js')!!}
   {!!Html::script('js/mio.js')!!}
   {!!Html::script('js/materialize.min.js')!!}

  <style type="text/css">
 

    .slick-slide {
      margin: 0px 10px;
    }

 

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: 1;
    }

  </style>
<body>

	<header>
	<nav>
    	<div class="nav-wrapper blue darken-3">
        
      	<a href="{!!URL::to('/cliente')!!}" class="brand-logo"><img src="{{ asset('img/Logo-Siscom.png') }}"></a>
      	<ul id="nav-mobile" class="right hide-on-med-and-down">
        	<li>{!!Auth::user()->name!!}</li>
          <li><a href="{!!URL::to('/cliente/all_cliente')!!}">Todos</a></li>
        	<li><a href="{!!URL::to('/cliente/carrito')!!}"><i class="large material-icons">local_grocery_store</i></a></li>
        	<li><a href="{!!URL::to('/logout')!!}">Salir</a></li>

      	</ul>
    	</div>
  	</nav>
	</header>
  @yield('conte') 
	 <footer class="page-footer blue-grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Logo-Siscom</h5>
                <p class="grey-text text-lighten-4">En  Electrónica comercializamos y brindamos asesoría en componentes innovadores de calidad, para cubrir las necesidades de diseño y mantenimiento, dentro de un ambiente que promueve la mejora y el desarrollo continuo.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <a href="#" class="brand-logo"><img src="{{ asset('img/Logo-Siscom.png') }}"></a>
                <ul>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright.
            
            </div>
          </div>
        </footer>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>

      
</body>
</html>