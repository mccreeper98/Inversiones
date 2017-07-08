   <?php

   foreach ($perfil as $p) {
   ?>

   <h5>Telefono:</h5> <?php echo $p['Tel']?>
   <h5>Clave interbancaria: <?php echo $p['Clave']?>
   <h5>RFC: </h5><?php echo $p['Rfc']?>
   <h4>Direccion.</h4>
   <h5>Calle:</h5> <?php echo $p['Calle']?>
   <h5>N° Exterior:</h5> <?php echo $p['Ext']?>
   <h5>N° Interior:</h5> <?php echo $p['Inte']?>
   <h5>Colonia: </h5><?php echo $p['Col']?>
   <h5>Codigo Postal: </h5><?php echo $p['Cp']?>
   <h5>Pais: </h5><?php echo $p['Pais']?>
   <h5>INE Frontal</h5>
   <img src="data:image/jpeg;base64,<?php echo base64_encode($p['IneF']);?>" height="200" width="300">
   <h5>INE Trasera</h5>
   <img src="data:image/jpeg;base64,<?php echo base64_encode($p['IneB']);?>" height="200" width="300">
   <h5>Comprobante de Domicilio</h5>
   <img src="data:image/jpeg;base64,<?php echo base64_encode($p['Comp']);?>" height="200" width="300">
   <h5>Estado de Cuenta</h5>
   <img src="data:image/jpeg;base64,<?php echo base64_encode($p['Est']);?>" height="200" width="300">
   <?php
   }
   ?>