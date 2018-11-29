<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
if(isset($_POST['enter'])){
    $cuenta = $_POST['cuenta'];
    $password = md5($_POST['password']);

    $stmt = $db->prepare("select * from cuenta where nombre_cuenta=:cu AND pass_cuenta=:pass");
    $stmt->execute(array('cu' => $cuenta,
                            'pass' => $password));
    $recuperar = $stmt->fetch();
    if($recuperar!=Null){
    $_SESSION["lacuenta"] = $recuperar['nombre_cuenta'];
    $_SESSION["intentos"]=0;
        header('Location: login2.php');
    }else{
        header('Location: login.php?error=1');
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Cuenta "; echo $_SESSION["lacuenta"]; ?></title>
    <link rel="stylesheet" href="vista/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vista/assets/fonts/simple-line-icons.min.css">
</head>

<body>
    
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        
        <div class="container">
            <h4 class="text-info"><?php echo "Cuenta: "; echo $_SESSION["lacuenta"]; ?></h4>
        </div>
        <div class="block-heading">
            <a class="navbar-brand logo" href="registro2.php">Añadir Usuario</a>
            <!--<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>-->
        </div>
    </nav>
    
    <main class="page service-page">
        <section class="clean-block clean-services dark">
            <div class="container" style="margin-top: 50px">
                <div class="row">

                    <?php
                    $db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
                        $cuent=$_SESSION["lacuenta"];
                        $stmt = $db->prepare("select b.id_cuenta from cuenta b where nombre_cuenta=:cu ");
                        $stmt->execute(['cu' => $cuent]);
                        $recu = $stmt->fetch();
                        $id = $recu['id_cuenta'];

                        $stmt2 = $db->prepare("select * from usuario where id_cuenta=:id and estado=1");
                        $stmt2->execute(['id' => $id]);
                        while($row = $stmt2->fetch()){
                           $_SESSION['imgusu']= $row['img_usu'];
                    ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card"><img class="card-img-top w-100 d-block" src="vista/assets/img/avatars/<?php echo $row['img_usu'] ?>.png">
                                <form name="user" action="modelo/session_init.php" method="post">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $row['usuario'] ?></h4>
                                        <input type      ="hidden" value="<?php echo $row['usuario'] ?>" readonly name="usuario" id="usuario"/>
                                        <input type      ="password" name="password" id="password"  class="form-control" minlength="3" maxlength="10" placeholder="Ingrese su Pin" autocomplete="off" required/>
                                    </div>
                                    <div><input type="submit" name="enter" id="enter" value="Iniciar Sesion" class="btn btn-signin btn-block btn-info" /></div>
                                </form>
                            </div>
                        </div>
                        
                    <?php
                        }
                    ?>
                </div>
            </div>
            
        </section>
    </main>
    <script src="vista/assets/js/jquery.min.js"></script>
    <script src="vista/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="vista/assets/js/theme.js"></script>
</body>
<footer style="background-color: #98AFC7"><a href="login.php" style="color: black; font-weight: bold; font-size: 150%;"> REGRESAR </a><a style="color: white; font-weight: bold;"><<</a></footer>
</html>