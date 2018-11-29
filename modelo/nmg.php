<?php

session_start();
$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
	$iddoc = $_SESSION['iddc'];

        $stmt = $db->prepare("select no_me_gusta from documento where id_documento=:dcc ");
        $stmt->execute(['dcc' => $iddoc]);
        $recuperar = $stmt->fetch();
        $nmg = $recuperar['no_me_gusta'];
        $nmg=$nmg+1;
        $_SESSION['nmg']=$nmg;
        $stat1 = $db->prepare("update documento set no_me_gusta=:nmg where id_documento=:dc");
        $stat1->bindParam('nmg', $nmg);
        $stat1->bindParam('dc', $iddoc);
        $stat1->execute();
    
header('Location: ../vista/views/views_administrador/modelo_documento.php');
?>