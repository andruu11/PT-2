<?php

session_start();
$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
    	$iddoc = $_SESSION['iddc'];

    	$stmt = $db->prepare("select me_gusta from documento where id_documento=:dcc ");
        $stmt->execute(['dcc' => $iddoc]);
        $recuperar = $stmt->fetch();
        $mg = $recuperar['me_gusta'];
        $mg=$mg+1;
        $_SESSION['mg']=$mg;
        $stat1 = $db->prepare("update documento set me_gusta=:mg where id_documento=:dc");
        $stat1->bindParam('mg', $mg);
        $stat1->bindParam('dc', $iddoc);
        $stat1->execute();
    
header('Location: ../vista/views/views_administrador/modelo_documento.php');


?>