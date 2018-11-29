<script>alert("hola0");</script>
<?php
	session_start();
	include_once('consul.php');
	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		?><script>alert("hola1");</script><?php
		try{
			$usuario = $_POST['usuario'];
			$nombres = $_POST['nombres'];
			$apellidos = $_POST['apellidos'];
			$correos = $_POST['correos'];
			$id_ciudad = $_POST['id_ciudad'];
			$id_tipo_usuario = $_POST['id_tipo_usuario'];
			$id_usuario = $_POST['id1'];
			$id_persona = $_POST['id4'];


			$sql = "UPDATE usuario, persona SET usuario.usuario = '$usuario' , usuario.id_tipo_usuario = '$id_tipo_usuario' , persona.nombres = '$nombres', persona.apellidos = '$apellidos', persona.correos = '$correos', persona.id_ciudad = '$id_ciudad' WHERE usuario.id_usuario = '$id_usuario' AND persona.id_persona = '$id_persona'";

			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Usuario actualizado correctamente' : 'No se puso actualizar al Usuario';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	
	header('location: ../../vista/views/views_administrador/usuarios_administrador.php');

?>