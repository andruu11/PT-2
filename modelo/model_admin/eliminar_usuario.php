<?php
	session_start();
	include_once('consul.php');
	if(isset($_POST['elimi'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$idusuario = $_POST['idu'];
			$est = $_POST['est'];
			if($est==1){
				$est=0;
			}else{
				$est=1;
			}


			$sql = "UPDATE usuario SET estado = '$est' WHERE id_usuario = '$idusuario' ";

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