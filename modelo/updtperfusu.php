<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
if(isset($_POST['botonguardarusuario'])){

	$im = $_POST['imgusuu'];
    $us = $_POST['elusumodif'];
    $ppn = $_POST['pinmodif'];
    $persact = $_SESSION["idpersona"];

	$stat1 = $db->prepare("update usuario set usuario=:usuar , pin=:pp , img_usu=:im where id_persona=:per");
    $stat1->bindParam('usuar', $us);
    $stat1->bindParam('pp', $ppn);
    $stat1->bindParam('im', $im);
    $stat1->bindParam('per', $persact);
    $stat1->execute();

    $stmt = $db->prepare("select usuario from usuario where id_persona=:iddper ");
    $stmt->execute(['iddper' => $persact]);
    $recuperar = $stmt->fetch();
    $nuevousu = $recuperar['usuario'];
    $_SESSION['esteusuario']=$nuevousu;
    



    $message = "Los datos de la cuenta fueron modificados.";
	echo "<script type='text/javascript'>alert('$message');</script>";
    header('Location: ../vista/views/views_administrador/perfil_administrador.php');


}
?>