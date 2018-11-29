<?php
	require 'database.php';
	$objData = new Database();

	$cat = $_GET["variable"];
	
	$tabla = " ";
	$prueba = $objData->prepare("SELECT * FROM `documento` INNER JOIN tipo_documento ON documento.id_tipo_documento = tipo_documento.id_tipo_documento INNER JOIN usuario ON usuario.id_usuario = documento.id_usuario WHERE documento.id_categoria = :id_categoria");
	$prueba->bindParam(':id_categoria', $cat);
	$prueba->execute();
	$resultado_prueba = $prueba->fetchAll();
	foreach ($resultado_prueba as $key => $valor_prueba) {
 $editar = ''; 
	   
$archivo=$valor_prueba['fuente'];
$trozos = explode(".", $archivo); 
$extension = end($trozos); 
if($extension == 'pdf'){
 $var = '<a href=\"../../assets/recursos/'.$valor_prueba['archivo'].'\" target=\"_blank\" ><img src=\"../../assets/img/pdf.png\" width=\"50px\" height=\"50px\"></a>';
 }elseif ($extension == 'docx' || $extension == 'doc' ) {
 	  $var = '<a href=\"../../assets/recursos/'.$valor_prueba['archivo'].'\" target=\"_blank\"><img src=\"../../assets/img/word.png\" width=\"50px\" height=\"50px\"></a>';
 }elseif ($extension == 'mp4' || $extension == 'mpeg' || $extension == 'avi' || $extension == 'mpeg-4' || $extension == 'wmv' ) {
 	  $var = '<a href=\"../../assets/recursos/'.$valor_prueba['archivo'].'\" target=\"_blank\"><img src=\"../../assets/img/video.jpg\" width=\"50px\" height=\"50px\"></a>';
 }elseif ($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg'  ) {
 	  $var = '<a href=\"../../assets/recursos/'.$valor_prueba['archivo'].'\" target=\"_blank\"><img src=\"../../assets/img/imagen.jpg\" width=\"50px\" height=\"50px\"></a>';
 }else{
 	 $var = '';
 }

	$tabla.='{
				  "nombre":"'.utf8_encode($valor_prueba['id_documento']).'",
				  "ciudad":"'.utf8_encode($valor_prueba['nombre_documento']).'",
				  "archivo":"'.$var.'",
				  "acciones":"'.$editar.'"
				},';	
}
	
	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';	
	//header('location: ../../vista/views/views_administrador/foro.php');
?>