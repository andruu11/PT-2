<?php
require'../../../modelo/sessions.php';
$objses = new Sessions();
$objses->init();
if(isset($_SESSION['usuario'])){
    $nameU = $objses->get('usuario');
    $id_usuario = $objses->get('id_usuario');
    $id_tipo_usuario = $objses->get('id_tipo_usuario');
    $estado = $objses->get('estado');
    //Controlar el Perfil del acceso
    if($id_tipo_usuario != 1 || $estado != 1){
        $objses->destroy();
        header('Location: ../../../error.php');
    }
}else{
    $user = isset($nameU) ? $nameU : null ;
    if($user == ''){
            header('Location: ../../../error.php');
    }
}
?>