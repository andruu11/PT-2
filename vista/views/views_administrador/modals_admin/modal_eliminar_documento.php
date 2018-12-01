<form name="crud"  method="post" enctype="multipart/form-data" action="../../../modelo/model_admin/eliminar_documento.php" id="nuevo_so">
<div class="modal fade" id="Modal_Eliminar_Prueba" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel">Eliminar Documento</h4>
      </div>
      <div class="modal-body">
            
  <div class="form-group col-md-12">
    <center><h4>¿Desea eliminar el documento?</h4></center>
            <input type="hidden" class="form-control" id="id_documento" name="id_documento" required> 
   </div>
<div class="form-group col-md-12">
  <center><input type="submit" value="Si" class="btn btn-block btn-success" />
  <input type="button" value="No" class="btn btn-block btn-danger" data-dismiss="modal"/></center>
   </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</form>