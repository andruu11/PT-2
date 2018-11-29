<?php
require'sessions.php';
$objses = new Sessions();
$objses->init();
if(isset($_SESSION['usuario'])){
    $id_usuario = $objses->get('id_usuario');
}else{
    header('Location: ../error.php');
    }
$objSe = new Sessions();
$objSe->init();
$objSe->destroy();

header('location: ../index.php');


?>