<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
if(isset($_POST['enviar'])){

	 $id = "Null";

	$usu=$_SESSION['esteusuario'];
    $stmt = $db->prepare("select * from usuario where usuario=:us ");
    $stmt->execute(['us' => $usu]);
    $recuperar = $stmt->fetch();
    $idusu = $recuperar['id_usuario'];
    

    $com = $_POST['comentario'];
    $iddocumento = $_POST['iddeldoc'];
    $fecha = date("Y/m/d");
    $tiempo = date("h:i:sa");
    $fe = $fecha." ".$tiempo;
    #$message = $fe;

    #echo "<script type='text/javascript'>alert('$message');</script>";
    $stat1 = $db->prepare("insert into comentario values(?,?,?,?,?)");
    $stat1->bindParam(1, $id);
    $stat1->bindParam(2, $com);
    $stat1->bindParam(3, $fe);
    $stat1->bindParam(4, $iddocumento);
    $stat1->bindParam(5, $idusu);
    $stat1->execute();

    header('Location: ../vista/views/views_administrador/modelo_documento.php');
}
?>
    