<?php
require 'database.php';
$objData = new Database();
$privilegio= $objData->prepare('SELECT * FROM persona ');
$privilegio->execute();
$resultado_privilegio = $privilegio->fetchAll();
?>