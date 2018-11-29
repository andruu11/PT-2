<?php
$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
if(isset($_POST['save'])){
    
    #$message = $ciudadd;
    #echo "<script type='text/javascript'>alert('$message');</script>";

    $id = "Null";
    
    #persona +id apellidos,
    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $correos = $_POST['correo'];
    $ciudad = $_POST['ciudad'];

    
    #cuenta +id
    $cuenta = $_POST['cuenta'];
    $password = md5($_POST['password']);
    $cant = $_POST['cantidad'];
    $numusu = 1;
    
    #usuario +id, usu, pin, img, estado, tipousu, idcuenta, idpersona
    $usu = $_POST['usuario'];
    $pin = $_POST['pin'];
    $img = $_POST['imgusu'];
    $est = 1;
    $tipo = 2;

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
    $id2 = $recuperar['id_persona'];

    $stat2 = $db->prepare("insert into cuenta values(?,?,?,?,?)");
    $stat2->bindParam(1, $id);
    $stat2->bindParam(2, $cuenta);
    $stat2->bindParam(3, $password);
    $stat2->bindParam(4, $cant);
    $stat2->bindParam(5, $numusu);
    $stat2->execute();

    $stmt2 = $db->prepare("select b.id_cuenta from cuenta b where nombre_cuenta=:cu ");
    $stmt2->execute(['cu' => $cuenta]);
    $recuperar2 = $stmt2->fetch();
    $id1 = $recuperar2['id_cuenta'];

    $stat3 = $db->prepare("insert into usuario values(?,?,?,?,?,?,?,?)");
    $stat3->bindParam(1, $id);
    $stat3->bindParam(2, $usu);
    $stat3->bindParam(3, $pin);
    $stat3->bindParam(4, $img);
    $stat3->bindParam(5, $est);
    $stat3->bindParam(6, $tipo);
    $stat3->bindParam(7, $id1);
    $stat3->bindParam(8, $id2);
    $stat3->execute();

    header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Form Wizard with jQuery and PHP</title>
    <link href="vista/assets/reg/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="vista/assets/reg/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="vista/assets/reg/style.css" rel="stylesheet"/>
</head>
<body>
    
    <div class="container-fluid">
        <p><br/></p>
        <h3>Data Manager al fin tuviste exito</h3>
        <!--
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Username</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Website</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <?php
                #$stmt = $db->prepare("select a.id, a.name, a.email, a.phone, a.address, b.username, c.title, c.description, c.website, c.category from about a, account b, website c where a.id=b.id and a.id=c.id and b.id=c.id");
                #$stmt->execute();
                #while($row = $stmt->fetch()){
                ?>
                <tr>
                    <td><?php #echo $row['id'] ?></td>
                    <td><?php #echo $row['name'] ?></td>
                    <td><?php #echo $row['email'] ?></td>
                    <td><?php #echo $row['phone'] ?></td>
                    <td><?php #echo $row['address'] ?></td>
                    <td><?php #echo $row['username'] ?></td>
                    <td><?php #echo $row['title'] ?></td>
                    <td><?php #echo $row['description'] ?></td>
                    <td><?php #echo $row['website'] ?></td>
                    <td><?php #echo $row['category'] ?></td>
                </tr>
                <?php
                #}
                ?>
            </tbody>
        </table>
        -->
        <p class="text-center">
            <br/>
            <a href="index.html" class="btn btn-primary">Back to homepage</a>
        </p>
    </div>
    
    <script src="vista/assets/reg/js/jquery.min.js"></script>
    <script src="vista/assets/reg/js/popper.min.js"></script>
    <script src="vista/assets/reg/js/bootstrap.min.js"></script>
    <script src="vista/assets/reg/script.js"></script>
</body>
</html>