<!-- Modal Structure -->
  <div id="EditarProyecto" class="modal">
    <div class="modal-content">

 <form accept-charset="utf-8" method="POST" name="editar" id="editar" enctype="multipart/form-data" autocomplete="off">
          <h5>Editar Proyecto:</h5>
          <div class="input-field col s12 m6">
            <input placeholder="<?php echo $identificador; ?>" name="nombre" id="nombre" type="text" class="validate" maxlength="50" required="required" value="">
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
              <input type="file" name="file_array[]" id="imagen[]" multiple="" required="required">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <br>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button class="btn waves-effect waves-light " type="submit" name="action" class="aceptar">Agregar Proyecto
            <i class="material-icons right">send</i>
          </button>
           
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
    
        </form>  

    </div>
  </div>