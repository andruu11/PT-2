<?php
require 'database.php';
$objData = new Database();
$categoria = $objData->prepare('SELECT * FROM categoria');
$categoria->execute();
$resultado_categoria = $categoria->fetchAll();

$tipo_documento = $objData->prepare('SELECT * FROM tipo_documento');
$tipo_documento->execute();
$resultado_tipo_documento = $tipo_documento->fetchAll();
?>