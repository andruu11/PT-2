<?php
session_start();
require_once("../../default/default_administrador/main_administrador.php");
require_once("../../default/default_administrador/header_administrador.php");
//require_once("../../default/default_administrador/footer_administrador.php");
require_once("../../default/default_administrador/sidebar_administrador.php");
require_once("../../../modelo/model_admin/consultas.php"); 
?>

<?php
if (isset($_POST["buscar"])) {
  $boton = $_POST['ids'];
  $bus = '%'.$_POST["buscar"].'%';
  $prueba = $objData->prepare("SELECT * FROM `documento` INNER JOIN tipo_documento ON documento.id_tipo_documento = tipo_documento.id_tipo_documento INNER JOIN usuario ON usuario.id_usuario = documento.id_usuario WHERE documento.id_categoria = :id_categoria AND documento.nombre_documento LIKE :bus");
  $prueba->bindParam(':id_categoria', $_POST["ids"]);
  $prueba->bindParam(":bus", $bus, PDO::PARAM_STR);
 
  $prueba->execute();
  $resultado_prueba = $prueba->fetchAll();
}elseif (isset($_GET["variable"])) {
  $boton = $_GET['variable'];
  $prueba = $objData->prepare("SELECT * FROM `documento` INNER JOIN tipo_documento ON documento.id_tipo_documento = tipo_documento.id_tipo_documento INNER JOIN usuario ON usuario.id_usuario = documento.id_usuario WHERE documento.id_categoria = :id_categoria");
  $prueba->bindParam(':id_categoria', $_GET["variable"]);
  $prueba->execute();
  $resultado_prueba = $prueba->fetchAll();
} 


?>


                <!--==================================================================================-->
                <!--*********************************   PAGE AREA   **********************************-->
                <!--==================================================================================--> 



  
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <form action="foro.php" method="POST">
        <input type="text" id="buscar" name="buscar">
        <input type="hidden" id="ids" name="ids" value="<?php echo $_GET["variable"]; ?>">
        <input type="submit" value="Buscar" class="btn btn-info" style="color:#FAFAFA" />
      </form>
      

    </div>
    <div class="col-md-4"><a href="foro.php?variable=<?php echo $boton?>"" class="btn btn-info"  style="color:#FAFAFA" >Mostrar Todos</a></div>
    <div class="col-md-4"> <button type="button" class="btn btn-success pull-right menu" data-toggle="modal" data-target="#Modal_Nuevo_Documento"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i>&nbsp;Nuevo Documento</button> 
<?php require_once('modals_admin/modal_nuevo_documento.php');
require_once('modals_admin/modal_editar_documento.php');
require_once('modals_admin/modal_eliminar_documento.php');
  ?> 
    </div>
  </div>
  <div class="row cont-cajas">
    <?php  foreach ($resultado_prueba as $key => $valor_prueba) {?>
   <div class="card col-md-3 caja" >
<?php
$archivo=$valor_prueba['fuente'];
$trozos = explode(".", $archivo); 
$extension = end($trozos); 
if($extension == 'pdf'){ ?>
<a href="../../assets/recursos/<?php echo $archivo?>" target="_blank">
  <img class="card-img-top" src="../../assets/img/pdf.png"></a>
 <?php
 }elseif ($extension == 'docx' || $extension == 'doc' ) { ?>
   <a href="../../assets/recursos/<?php echo $archivo?>" target="_blank">
  <img class="card-img-top" src="../../assets/img/word.png"></a>
 <?php
 }elseif ($extension == 'mp4' || $extension == 'mpeg' || $extension == 'avi' || $extension == 'mpeg-4' || $extension == 'wmv' ) { ?>
   <a href="../../assets/recursos/<?php echo $archivo?>" target="_blank">
  <img class="card-img-top" src="../../assets/img/video.png"></a>
 <?php
 }elseif ($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg'  ) { ?>
   <a href="../../assets/recursos/<?php echo $archivo?>" target="_blank">
  <img class="card-img-top" src="../../assets/img/imagen.jpg"></a>
 <?php
 }else{
   $var = '';
 }
 ?>


  <div class="card-body">
    
  </div>
  <ul class="list-group list-group-flush">
    <h5 class="card-title text-center"><?php echo utf8_encode($valor_prueba['nombre_documento']) ?></h5>
    <li class="list-group-item"><?php echo ($valor_prueba['fecha_documento']) ?></li>
    <li class="list-group-item"><?php echo ($valor_prueba['usuario']) ?></li>
    <li class="list-group-item"><?php echo ($valor_prueba['puntaje_didactico']) ?></li>
    </ul>
  <div class="card-body">
    <button type="button" class="btn btn-block btn-warning" data-toggle="modal" title="Editar" data-target="#Modal_Editar_Prueba" data-id_documento="<?php echo ($valor_prueba['id_documento']) ?>" data-nombre_documento="<?php echo utf8_encode($valor_prueba['nombre_documento']) ?>" data-id_categoria="<?php echo utf8_encode($valor_prueba['id_categoria']) ?>" data-id_tipo_documento="<?php echo ($valor_prueba['id_tipo_documento']) ?>" style="color: #FAFAFA" >Editar</button>
    <button type="button" class="btn btn-block btn-danger" data-toggle="modal" title="Editar" data-target="#Modal_Eliminar_Prueba" data-id_documento="<?php echo ($valor_prueba['id_documento']) ?>" style="color: #FAFAFA" >Eliminar</button>
  </div>
</div>
<?php }?>
  </div>
</div>
<script src="../../assets/js/var_prueba.js" type="text/javascript"></script>
<script src="../../assets/js/check_image.js" type="text/javascript"></script>
</body>
</html>

                <!--==================================================================================-->
                <!--*********************************   PAGE AREA   **********************************-->
                <!--==================================================================================-->  
 
     <?php 
    require_once("../../default/sidebarend.php");
    ?>