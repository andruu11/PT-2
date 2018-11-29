<?php
#$message = "hola";
#echo "<script type='text/javascript'>alert('$message');</script>";


$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
if(isset($_POST['btnguardar'])){
    
    #$message = $ciudadd;
    #echo "<script type='text/javascript'>alert('$message');</script>";

    
    $comentario= $_POST['commentar'];
    $idcomentario = $_POST['idcom'];
    $idusuario = $_POST['idus'];
    $fecha = date("Y/m/d");
    $tiempo = date("h:i:sa");
    $fe = $fecha." ".$tiempo;

	$stat1 = $db->prepare("update comentario set des_comentario=:com , fecha_hora_comentario=:fech where id_comentario=:idcom");
    $stat1->bindParam('com', $comentario);
    $stat1->bindParam('fech', $fe);
    $stat1->execute();
header('Location: ../vista/views/views_administrador/modelo_documento.php');

}
?>