<?php
require '../database.php';
$objData = new databaseProyecto();
$objData->exec("set names utf8");
//consulta para insertar datos cuenta y usuario
$id_usuario=' ';
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$img_usu = $_POST['img_usu'];
$estado= "1" ;
$id_persona=' ';
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correos = $_POST['correos'];
$id_ciudad = $_POST['id_ciudad'];
$id_cuenta = ' ';
$nombre_cuenta = $_POST['nombre_cuenta'];
$pass_cuenta = $_POST['pass_cuenta'];
$cant_tea = $_POST['cant_tea'];
$num_usuarios = $_POST['num_usuarios'];
$intentos = ' ';
//cuenta
$sth_usuario = $objData->prepare('INSERT INTO cuenta VALUES ( :id_cuenta,  :nombre_cuenta, :pass_cuenta, :cant_tea, :num_usuarios, :intentos) ');
$sth_usuario->bindParam(':id_cuenta', $id_cuenta);
$sth_usuario->bindParam(':nombre_cuenta', $nombre_cuenta);
$sth_usuario->bindParam(':pass_cuenta', $pass_cuenta);
$sth_usuario->bindParam(':cant_tea', $cant_tea);
$sth_usuario->bindParam(':num_usuarios,', $num_usuarios);
$sth_usuario->bindParam(':intentos', $intentos);
$sth_usuario->execute();
//usuario
$sth_usuario = $objData->prepare('INSERT INTO persona VALUES ( :id_persona, :nombres,  :apellidos, :correos, :id_ciudad) ');
$sth_usuario->bindParam(':id_persona', $id_persona);
$sth_usuario->bindParam(':nombre', $nombre);
$sth_usuario->bindParam(':ap_paterno', $ap_paterno);
$sth_usuario->bindParam(':ap_materno', $ap_materno);
$sth_usuario->execute();
//usuario
$sth_usuario = $objData->prepare('INSERT INTO usuario VALUES (:id_usuueario, :id_persona,   :usuario, :estado, :password, :img_usu, :id_tipo_usuario, id_cuenta) ');
$sth_usuario->bindParam(':id_usuario', $id_usuario);
$sth_usuario->bindParam(':id_persona', $id_persona);
$sth_usuario->bindParam(':img_usu', $img_usu);
$sth_usuario->bindParam(':id_tipo_usuario', $id_tipo_usuario);
$sth_usuario->bindParam(':id_cuenta', $id_cuenta);
$sth_usuario->bindParam(':estado', $estado);
$sth_usuario->bindParam(':usuario', $usuario);
$sth_usuario->bindParam(':password', $password);
$sth_usuario->execute();
//header('location: ../../vista/views/views_sadministrador/index_sadministrador.php');
				//hallamos el ultimo registro de tabla monitor

?>