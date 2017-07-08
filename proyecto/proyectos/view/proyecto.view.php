<!DOCTYPE html>
<html>
<head>
	<title>Proyecto</title>
	<meta charset="utf-8">
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
	<link rel="stylesheet" href="../css/master.css">
	<link rel="stylesheet" href="../css/animate.css">
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="../js/angular.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>


  <div class="navbar-fixed">
    <nav class="negrobg">
      <div class="nav-wrapper">
        <div class="container">
          <a href="" class="brand-logo"><img src="../img/logob.png" height="60px" style="padding-top: 5px"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="../#funciona">¿Cómo funciona?</a></li>
            <li><a href="../#invertir">¿Por qué nosotros?</a></li>
            <li><a href="../#proyectos">Proyectos</a></li>
            <li><a href="../contacto.html">Contacto</a></li>
            <li><a href="../registra.php"><span class="registro">Registrate</span></a></li>
            <li><a href="../login.php"><span class="ingresar">Ingresar</span></a></li>
          </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="../#funciona">¿Cómo funciona?</a></li>
          <li><a href="../#invertir">¿Por qué nosotros?</a></li>
          <li><a href="../#proyectos">Proyectos</a></li>
          <li><a href="../contacto.html">Contacto</a></li>
          <li><a href="../registra.php"><span >Registrate</span</a></li>
          <li><a href="../login.php"><span >Ingresar</span></a></li>
        </ul>
      </div>
    </nav>
  </div>


	<main>
	<div class="row">
	<div class="col s12 center" style="padding-bottom: 20px;"><h4>Nombre proyecto</h4></div>

	  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/640/480/city/"></a>
    <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/640/480/city/"></a>
    <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/640/480/city/"></a>
    <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/640/480/city/"></a>
    <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/640/480/city/"></a>
  </div>
   <div class="progress col s12">
   	  <div class="centradoR"><center><b>20% fondeado</b></center></div>
      <div class="determinate center negro" style="width: 20%"></div>
  </div>
	<div class="col s12 m6">
		

<div class="col s12" style="margin-top: 15px; border: 1px solid #393646; border-radius: 10px">
	<p><b>Descripción del proyecto</b></p>
	<p><b>Rendimiento: 20%</b></p>
	<p><b>Plazo: 24 meses</b></p>
	<p><b>Minimo  de inversión: $50,500.00</b></p>
	<p><b>Monto requerido: $1,000,000.00</b></p>
</div>



	</div>

	<div class="col s12 m6">
	<h5 class="center">Datos extras</h5>
	<div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<br>
	<h5>Invierte ahora</h5>
		<hr>
	<form ng-app="">
	<input type="number" name="inversion" ng-model="inversion" placeholder="$ 000.000.00">
	<h5>Inversión + rendimiento: {{( inversion + (inversion/100)*20) | currency }}</h5>
		<button class='btn-large waves-effect waves-light negro col s12 animated bounceIn' type='submit' name='action'>Invertir
         </button>
	</form>
	</div>

		
	</div>
	</main>

<?php require 'footer.php'; ?>
	<!--Start menu-->
	<script type="text/javascript">
		$(".button-collapse").sideNav();
	</script>
	<!--End menu-->
       
      <!--Start corrousel-->
	<script type="text/javascript">
    $(document).ready(function(){
      $('.carousel').carousel({
      	dist: -50,
      	indicators: true
      	});
    });
        
	</script>
	<!--End corrousel-->

	      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/59458844e9c6d324a4735eec/default';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
        })();
      </script>
      <!--End of Tawk.to Script-->

</body>
</html>