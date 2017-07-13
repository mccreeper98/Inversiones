<?php

  try{
  require 'conn.php';

  $queryProyect = "SELECT proyecto.Nombre,proyecto.Des,images.img FROM proyecto INNER JOIN images ON proyecto.Nombre = images.proyecto";
  $proyect = $conn->query($queryProyect);

  foreach ($proyect as $p ) {
?>    
 
<div class="row">

      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo $p['img']?>">
            <span class="card-title"><?php echo $p['Nombre']?></span>
          </div>
          <div class="card-content">
            <p><?php echo $p['Des']?></p>
            </div>
            <div class="card-action">
                <a class="btn waves-effect waves-light negro col s12 animated" href="proyecto">VER MÁS</a><br><br>
            </div>
          </div>
        </div>


<?php
 }
}catch(Exeption $e){

  echo "Error".$e."";

}
?>
</div>  

<div class="col s12" style="padding-bottom: 50px">
  <center>
    <a href="proyectos" class="negro">
      <U><B><h5>VER MÁS PROYECTOS <i class="material-icons">navigate_next</i></h5></B></U>
    </a>
  </center>
</div>
          