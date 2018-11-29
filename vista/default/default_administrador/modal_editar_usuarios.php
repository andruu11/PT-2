
<!-- Modal Editar Usuario-->
<div class="modal fade" id="edit_<?php echo $row['usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
        <form method="POST" action="../../../modelo/model_admin/editar_usuarios.php">
            <input type="text" class="form-control" name="id1" value="<?php echo $id1?>" hidden = "true">
            <input type="text" class="form-control" name="id4" value="<?php echo $id4?>" hidden = "true">
        <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Usuario:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="usuario" value="<?php echo $row['usuario']; ?>">
                    </div>
        </div>
        <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Nombres:</label>
                    </div>
                    <div class="col-sm-10"> 
                        <input type="text" class="form-control" name="nombres" value="<?php echo $row['nombres']; ?>">
                    </div>
        </div>
        <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Apellidos:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']; ?>">
                    </div>
        </div>
         <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Correo electronico:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="correos" class="form-control" name="correos" value="<?php echo $row['correos']; ?>">
                    </div>
        </div>

         

         <div class="row form-group ">
            <div class="col-sm-2">
            <label for="select" class="control-label">Ciudad:</label>
            </div>
            <div class="col-sm-10">
            <select class="form-control" id="id_ciudad" name="id_ciudad" onKeyPress="return dependencia(event);" required/>
            
            <option value="<?php echo $id2; ?>">Ciudad actual: <?php echo $row['des_ciudad']; ?></option>
                                        <option value="1">La Paz</option>
                                        <option value="10">El Alto</option>
                                        <option value="4">Cochabamba</option>
                                        <option value="9">Santa Cruz</option>
                                        <option value="5">Chuquisaca</option>
                                        <option value="3">Potosí</option>
                                        <option value="2">Oruro</option>
                                        <option value="7">Pando</option>
                                        <option value="8">Beni</option>
                                        <option value="6">Tarija</option>
        </select>
            </div>
         </div>

         <div class="row form-group ">
            <div class="col-sm-2">
            <label for="select" class="control-label">Privilegio:</label>
            </div>
            <div class="col-sm-10">
            <select class="form-control" id="id_tipo_usuario" name="id_tipo_usuario" onKeyPress="return dependencia(event);" required/>

                <option value="<?php echo $id3; ?>">Privilegio actual: <?php echo $row['des_tipo_usuario']; ?></option>

                <?php if($_SESSION['lacuenta']=="admin"){
                    ?>
                    <option value="1">Admin</option>
                    <?php
                }?>
                <option value="2">Tutor</option>
                <option value="3">Familiar</option>
                            
            </select>
            </div>
         </div>
       
  

        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" name="editar" class="btn btn-success"><span class="fa fa-check"></span> Guardar</a>
        </form>
        </div>
        </div>
        </div>
        </div><!--end modal editar-->


    <!--modal eliminar-->
   <div class="modal fade" id="delete_<?php echo $row['usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"></h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            <form method="POST" action="../../../modelo/model_admin/eliminar_usuario.php">    
                <p class="text-center"><?php if($row['estado']==1){ echo "Esta seguro que desea eliminar el usuario?"; }else{ echo "Esta seguro que desea reactivar el usuario?"; } ?></p>
                <h2 class="text-center"><?php echo $row['nombres'].' '.$row['apellidos']; ?></h2>

            </div>
            <input hidden="true" type="text" name="idu" value="<?php echo $row['id_usuario'] ?>">
            <input hidden="true" type="text" name="est" value="<?php echo $row['estado'] ?>">
            <div class="modal-footer">
                <button  type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <?php if($row['estado']==1){ ?> <button name="elimi" type="submit" class="btn btn-danger"><span class="fa fa-trash"></span> Si</button> <?php }else{ ?> <button name="elimi" type="submit" class="btn btn-success"><span class="fa fa-check"></span> Si</button> <?php } ?>
                
            </div>
        </form>
        </div>
        </div>
    </div>
</div>
<!--end modal-->