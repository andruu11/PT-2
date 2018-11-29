<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
if(isset($_POST['guardarpersona'])){

	$nombres = $_POST['nommod'];
    $apellidos = $_POST['apmod'];
    $correos = $_POST['example-emailmod'];
    $ciudad = $_POST['ciumod'];

#how to send alert in php!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    #$message = $nombres;
	#echo "<script type='text/javascript'>alert('$message');</script>";
#how to send alert in php!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$idciu=0;
$cc=$ciudad;
switch ($cc) {
	case "La Paz":
		$idciu=1;
		break;

	case "El Alto":
		$idciu=10;
		break;

	case "Cochabamba":
		$idciu=4;
		break;

	case "Santa Cruz":
		$idciu=9;
		break;

	case "Chuquisaca":
		$idciu=5;
		break;

	case "Potosí":
		$idciu=3;
		break;

	case "Oruro":
		$idciu=2;
		break;

	case "Pando":
		$idciu=7;
		break;

	case "Beni":
		$idciu=8;
		break;

	case "Tarija":
		$idciu=6;
		break;

		default: $message1 = "Ocurrio un error. Intente de nuevo.";
	echo "<script type='text/javascript'>alert('$message1');</script>";
    header('Location: ../vista/views/views_administrador/perfil_administrador.php');
    break;
	
}
$usu=$_SESSION['esteusuario'];
    $stmt = $db->prepare("select id_persona from usuario where usuario=:us ");
    $stmt->execute(['us' => $usu]);
    $recuperar = $stmt->fetch();
    $idper = $recuperar['id_persona'];

$stat1 = $db->prepare("update persona set nombres=:nom , apellidos=:ap , correos=:co , id_ciudad=:ciu where id_persona=:per");
    $stat1->bindParam('nom', $nombres);
    $stat1->bindParam('ap', $apellidos);
    $stat1->bindParam('co', $correos);
    $stat1->bindParam('ciu', $idciu);
    $stat1->bindParam('per', $idper);
    $stat1->execute();

    $message = "Los datos personales fueron modificados.";
	echo "<script type='text/javascript'>alert('$message');</script>";
    header('Location: ../vista/views/views_administrador/perfil_administrador.php');


}
?>