<?php

require 'database.php';
$objData = new Database();
$objData->exec("set names utf8");
$w =	$_POST['checke'];
switch ($w) {
case '1':
$id_documento= $_POST['id_documento'];
$nombre_documento = $_POST['nombre_documento'];
$id_categoria = $_POST['id_categoria']; 
$id_tipo_documento = $_POST['id_tipo_documento']; 
//$fecha_material = date("Y-m-d H:i:s");
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
$sth = $objData->prepare('UPDATE documento SET nombre_documento = :nombre_documento, fuente = :fuente, id_tipo_documento = :id_tipo_documento, id_categoria = :id_categoria WHERE documento.id_documento = :id_documento ');
$sth->bindParam(':id_documento', $id_documento);
$sth->bindParam(':nombre_documento', $nombre_documento);
$sth->bindParam(':fuente', $userpic);
$sth->bindParam(':id_tipo_documento', $id_tipo_documento);
$sth->bindParam(':id_categoria', $id_categoria);
$sth->execute();
header('location: ../../vista/views/views_administrador/doc_acad.php');
		break;
	case null:
$id_documento= $_POST['id_documento'];
$nombre_documento = $_POST['nombre_documento'];
$id_categoria = $_POST['id_categoria']; 
$id_tipo_documento = $_POST['id_tipo_documento']; 
$sth = $objData->prepare('UPDATE documento SET nombre_documento = :nombre_documento, id_tipo_documento = :id_tipo_documento, id_categoria = :id_categoria WHERE documento.id_documento = :id_documento ');
$sth->bindParam(':id_documento', $id_documento);
$sth->bindParam(':nombre_documento', $nombre_documento);
$sth->bindParam(':id_tipo_documento', $id_tipo_documento);
$sth->bindParam(':id_categoria', $id_categoria);
$sth->execute();
header('location: ../../vista/views/views_administrador/doc_acad.php');
		break;
}

?>
