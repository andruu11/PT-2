<form name="crud"  method="post" enctype="multipart/form-data" action="../../../modelo/model_admin/nuevo_documento.php" id="nuevo_so">
<div class="modal fade" id="Modal_Nuevo_Documento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="exampleModalLabel">Nueva Documento</h4>
      </div>
      <div class="modal-body">
            
  <div class="form-group col-md-12">
            <label for="codigo" class="control-label" >Nombre:</label>
            <input type="text" class="form-control" id="id_usuario" name="id_usuario" value="1" required> 
            <input type="text" class="form-control" id="nombre_documento" name="nombre_documento" onpaste="return false" minlength="5" maxlength="100" required> 
  </div>
<div class="form-group col-md-12">
            <label for="codigo" class="control-label" >Recurso adjunto:</label>
            <input type="file" class="form-control" id="fuente" name="fuente" required> 
</div>
<div class="form-group col-md-8">
    <label for="select" class="control-label">Categoria:</label>
        <select class="form-control" id="id_categoria" name="id_categoria" required/>
        <option value="">-----Seleccione una categoria------</option>
        <?php
  
        foreach ($resultado_categoria as $key_categoria => $value_categoria) { ?>
          <option value="<?php echo $value_categoria['id_categoria'];?>"><?php echo "<b>".utf8_encode($value_categoria['des_categoria'])."</b>";}?></option>
        </select>
</div> 

<div class="form-group col-md-8">
    <label for="select" class="control-label">Tipo documento:</label>
        <select class="form-control" id="id_tipo_documento" name="id_tipo_documento" required/>
        <option value="">-----Seleccione un tipo------</option>
        <?php
  
        foreach ($resultado_tipo_documento as $key_tipo_documento => $value_tipo_documento) { ?>
          <option value="<?php echo $value_tipo_documento['id_tipo_documento'];?>"><?php echo "<b>".utf8_encode($value_tipo_documento['des_tipo_documento'])."</b>";}?></option>
        </select>
</div> 


            <input type="submit" value="Registrar" class="btn btn-block btn-success" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</form>