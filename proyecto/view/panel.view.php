<!DOCTYPE html>
<html>
<head>
  <title>Panel de control</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/animate.css">
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

  <div class="navbar-fixed">
    <nav class="negrobg">
      <div class="nav-wrapper">
        <div class="container">
          <a href="index" class="brand-logo"><img src="img/logob.png" height="56px" style="padding-top: 10px"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="admin">Administrar</a></li>
            <li><a href="proyectos">Proyectos</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="3"><span><?php echo $_SESSION['user']; ?></span></a></li>
            <li><a href="cerrar.php"><span class="ingresar">Cerrar Sesión</span></a></li>
          </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="admin">Administrar</a></li>
          <li><a href="#invertir">Proyectos</a></li>
          <li><a href="#proyectos">Perfil</a></li>
          <li><a href="registra.php"><span ><?php echo $_SESSION['user']; ?></span></a></li>
          <li><a href="cerrar.php"><span >Cerrar Sesión</span></a></li>
        </ul>
      </div>
    </nav>
  </div>


  <main class="animated fadeIn" style="margin-top: 100px">
  <div class="row">
      <div class="container">
       <caption class="col s12"><h4 class="thin">Proyectos</h4> 
 <a class="" href="#AgregarProyecto"><i class="material-icons right green-text" id="agregar" title="Agregar proyecto">add</i></a>
       </caption>
        <table class="highlight">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Desarrollador</th>
              <th>Descripción</th>
              <th>Estatus</th>
              <th>Acción</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td>Lorem</td>
              <td>Eclair</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates sint neque quod quis, animi provident earum veritatis, modi eos a nobis itaque alias aliquam aperiam illum laboriosam, commodi? Eius, pariatur?</td>
              <td>Activo</td>
              <td>
                <div class="col s12" title="Editar"><i class="material-icons orange-text" id="edit">mode_edit</i></div>
                <div class="col s12" title="Borrar"><i class="material-icons red-text" id="delete">delete_forever</i></div> 
              </td>
            </tr>


            <tr>
              <td>Lorem</td>
              <td>Eclair</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates sint neque quod quis, animi provident earum veritatis, modi eos a nobis itaque alias aliquam aperiam illum laboriosam, commodi? Eius, pariatur?</td>
              <td>Activo</td>
              <td>
                <div class="col s12" title="Editar"><i class="material-icons orange-text" id="edit">mode_edit</i></div>
                <div class="col s12" title="Borrar"><i class="material-icons red-text" id="delete">delete_forever</i></div> 
              </td>
            </tr>


          </tbody>
        </table>
      </div>
      <div class="container" id="graficas" style="margin-top: 60px">
      <h4 class="thin">Estadisticas</h4>
      <hr>
        <div class="col s12 m4">
        <canvas id="grafica" width="100" height="100"></canvas>
        </div>

        <div class="col s12 m4">
        <canvas id="grafica2" width="100" height="100"></canvas>
        </div>

        <div class="col s12 m4">
        <canvas id="grafica3" width="100" height="100"></canvas>
        </div>

      </div>
  </div>
</main>


  <!-- Modal Structure -->
  <div id="AgregarProyecto" class="modal">
    <div class="modal-content">

 <form accept-charset="utf-8" method="POST" name="registro" id="registro" enctype="multipart/form-data" autocomplete="off">
          <h5>Agegar Proyecto:</h5>
          <div class="input-field col s12 m6">
            <input placeholder="Nombre" name="nombre" id="nombre" type="text" class="validate" maxlength="50" required="required">
          </div>
          <input type="number" name="porcentaje" placeholder="Porcentaje" min="0" max="100" required="required" maxlength="3">
          <div class="input-field col s12 m6">
            <input placeholder="Monto Requerido" pattern="[0-9,]{1,10}" name="requerido" id="requerido" type="text" class="validate" maxlength="10" required>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Inversion Minima" name="inversion" id="inversion" type="text" class="validate" pattern="[0-9,]{1,5}" maxlength="5" required>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Tipo de Financiamieto" name="financiamieto" id="financiamieto" type="text" class="validate" maxlength="20" required>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Tipo de Proyecto" name="tipo" id="tipo" type="text" class="validate" maxlength="20" required>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Sector" name="sector" id="sector" type="text" class="validate" maxlength="20" required>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Plazo" name="plazo" id="plazo" type="text" class="validate" maxlength="20" required>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Taza Anual" name="taza" type="text" class="validate" maxlength="5" required>
          </div>
          <div class="input-field col s12 m6">
          <label>Descripción</label>
            <textarea id="descripcion" placeholder="Descripcion" name="descripcion"  class="materialize-textarea" required="required"></textarea>
          </div>
          <div class="file-field input-field col s12">
            <div class="btn">
              <span>Subir imagenes</span>
              <input type="file" name="imagen[]" id="imagen[]" multiple="" required="required">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <button class="btn waves-effect waves-light right" type="submit" name="action" class="aceptar">Agregar Proyecto
            <i class="material-icons right">send</i>
          </button>
        </form>  

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
    </div>
  </div>

<?php require 'view/footer.view.php'; ?>

<!--Start menu-->
<script type="text/javascript">
  $(".button-collapse").sideNav();

  $(document).ready(function(){
    $('.carousel').carousel();
  });
// modaL
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('#AgregarProyecto').modal();
  });
</script>
<!--End menu-->

<script>
var ctx = document.getElementById("grafica");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [2, 6, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

<script>
var ctx = document.getElementById("grafica2");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [5, 2, 3, 5, 4, 8],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

<script>
var ctx = document.getElementById("grafica3");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [2, 9, 3, 8, 7, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>


</body>
</html>
