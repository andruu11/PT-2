<?php

require 'database.php';
$objData = new Database();
$objData->exec("set names utf8");
//jalamos datos del formulario

$buscar = $_POST['buscar'];
$id_categoria = $_POST['ids'];
//aqui ponen su consulta 
$prueba = $objData->prepare("SELECT * FROM `documento` INNER JOIN tipo_documento ON documento.id_tipo_documento = tipo_documento.id_tipo_documento INNER JOIN usuario ON usuario.id_usuario = documento.id_usuario WHERE documento.id_categoria = :id_categoria AND documento.nombre_documento = :nombre_documento");
  $prueba->bindParam(':id_categoria', $cat);
  $prueba->execute();
  $resultado_prueba = $prueba->fetchAll();
$sth->bindParam(':nombre_documento', $nombre_documento);
$sth->bindParam(':id_categoria', $id_categoria);
$sth->execute();
//aqui lo redirijen a un archivo que sea digamos foro buscar.php
header('location: ../../vista/views/views_administrador/doc_acad.php');

?>