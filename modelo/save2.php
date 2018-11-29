<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
if(isset($_POST['save2'])){
    
    $id = "Null";
    
    #persona +id apellidos,
    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $correos = $_POST['correo'];
    $ciudad = $_POST['ciudad'];
    
    
    #usuario +id, usu, pin, img, estado, tipousu, idcuenta, idpersona
    $usu = $_POST['usuario'];
    $pin = $_POST['pin'];
    $img = $_POST['imgusu'];
    $est = 1;
    $tipo = $_POST['tipo'];

    $stat1 = $db->prepare("insert into persona values(?,?,?,?,?)");
    $stat1->bindParam(1, $id);
    $stat1->bindParam(2, $nombres);
    $stat1->bindParam(3, $apellidos);
    $stat1->bindParam(4, $correos);
    $stat1->bindParam(5, $ciudad);
    $stat1->execute();

    $stmt = $db->prepare("select b.id_persona from persona b where correos=:mail ");
    $stmt->execute(['mail' => $correos]);
    $recuperar = $stmt->fetch();
    $idpers = $recuperar['id_persona'];

    $estacuenta = $_SESSION["lacuenta"];

    $stmt2 = $db->prepare("select * from cuenta where nombre_cuenta=:cu ");
    $stmt2->execute(['cu' => $estacuenta]);
    $recuperar2 = $stmt2->fetch();
    $idcuent = $recuperar2['id_cuenta'];
    $numusus = $recuperar2['num_usuarios'];
    $numusus = $numusus+1;

    $stat3 = $db->prepare("insert into usuario values(?,?,?,?,?,?,?,?)");
    $stat3->bindParam(1, $id);
    $stat3->bindParam(2, $usu);
    $stat3->bindParam(3, $pin);
    $stat3->bindParam(4, $img);
    $stat3->bindParam(5, $est);
    $stat3->bindParam(6, $tipo);
    $stat3->bindParam(7, $idcuent);
    $stat3->bindParam(8, $idpers);
    $stat3->execute();

    $statu = $db->prepare("update cuenta set num_usuarios=:nusuar where id_cuenta=:estcu");
    $statu->bindParam('nusuar', $numusus);
    $statu->bindParam('estcu', $idcuent);
    $statu->execute();

    header('Location: ../login2.php');
}
?>