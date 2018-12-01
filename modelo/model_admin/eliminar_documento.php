<?php

require 'database.php';
$objData = new Database();
$id_documento= $_POST['id_documento'];
$sth = $objData->prepare('DELETE FROM documento WHERE documento.id_documento = :id_documento ');
$sth->bindParam(':id_documento', $id_documento);
$sth->execute();
header('location: ../../vista/views/views_administrador/doc_acad.php');
?>
