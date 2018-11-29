<?php

require 'database.php';
$objData = new Database();
$objData->exec("set names utf8");
//jalamos datos del formulario
$id_documento= '';
$nombre_documento = $_POST['nombre_documento'];
$fecha_documento = date("Y-m-d H:i:s");
$puntaje_didactico = 0;
$id_tipo_documento = $_POST['id_tipo_documento'];
$me_gusta = 0;
$no_me_gusta = 0;
$id_categoria = $_POST['id_categoria'];
$id_usuario = $_POST['id_usuario'];
$imgFile = $_FILES['fuente']['name'];
$tmp_dir = $_FILES['fuente']['tmp_name'];
$imgSize = $_FILES['fuente']['size'];
//jalamos la imagen 
$upload_dir = '../../vista/assets/recursos/'; // upload directory
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
// valid image extensions
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'docx', 'doc'); // valid extensions
// rename uploading image
$userpic = rand(1000,1000000).".".$imgExt;
move_uploaded_file($tmp_dir,$upload_dir.$userpic);
//consulta para insertar publicaciones
$sth = $objData->prepare('INSERT INTO documento VALUES (:id_documento, :nombre_documento, :fecha_documento, :puntaje_didactico, :fuente, :id_tipo_documento, :me_gusta, :no_me_gusta, :id_categoria, :id_usuario) ');
$sth->bindParam(':id_documento', $id_documento);
$sth->bindParam(':nombre_documento', $nombre_documento);
$sth->bindParam(':fecha_documento', $fecha_documento);
$sth->bindParam(':puntaje_didactico', $puntaje_didactico);
$sth->bindParam(':fuente', $userpic);
$sth->bindParam(':id_tipo_documento', $id_tipo_documento);
$sth->bindParam(':me_gusta', $me_gusta);
$sth->bindParam(':no_me_gusta', $no_me_gusta);
$sth->bindParam(':id_categoria', $id_categoria);
$sth->bindParam(':id_usuario', $id_usuario);
$sth->execute();
header('location: ../../vista/views/views_administrador/doc_acad.php');

?>