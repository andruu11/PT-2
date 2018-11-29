<?php
session_start();
?>
<!DOCTYPE html>
<html langs="es">
    <head>
        <meta charset    ="UTF-8">
        <meta http-equiv ="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv ="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title>FATA</title>
        <link rel        ="stylesheet" href="vista/assets/css/bootstrap.css">
        <link rel        ="stylesheet" href="vista/assets/css/login.css">
        <link rel        ="stylesheet" href="vista/assets/doc/ICON/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
        <script src      ="vista/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 celeste">
                        <div class="contenido-celeste">
                    </div>
                    </div>
                    <div class="col-md-6 amarillo">
                        <a href="index.php" class="to_register">Volver</a>
                        <div class       ="card card card-container">
                             <img id          ="profile-img" class="profile-img-card" class="img-responsive" src="vista/assets/img/cop.png" />
                            <p id ="profile-name" class="profile-name-card"></p>
                            <form name       ="user" action="login2.php" method="post">
                                <label class="labels">Cuenta :</label>
                                <br />
                                <div class="input-group">
                                <input type      ="text" name="cuenta" class="form-control" minlength="3" maxlength="10" placeholder="Ingrese su Cuenta" autocomplete="off" required autofocus/>
                                <span class="input-group-addon"><i class="fa fa-users" title="En este campo debes agregar el nombre de la cuenta a la que perteneces" ></i></span>
                                </div>
                                <br />
                                <label class="labels">Contraseña :</label>
                                <br />
                                <div class="input-group">
                                <input type      ="password" name="password"  class="form-control" minlength="3" maxlength="10" placeholder="Ingrese su Contraseña" autocomplete="off" required/>
                                <span class="input-group-addon"><i class="fa fa-unlock" title="En este campo debes agregar la contraseña de la cuenta a la que perteneces" ></i></span>
                                </div>
                                <br />
                                <input type="submit" onclick="intt()" name="enter" id="enter" value="Iniciar Sesion" class="btn btn-signin btn-block btn-info" />
                                    
                                <br>
                                <p style="color:#FF0000; text-align: center; font-weight: bold;"><span id="countdowntimer"> </span></p>
                                <script>
                                    function intt() {
                                        <?php
                                            $_SESSION["intentos"]++;
                                            if($_SESSION["intentos"]==3){
                                                ?>
                                                    document.getElementById("enter").disabled=true;
                                                    document.getElementById("countdowntimer").innerHTML="Por favor espere: ";
                                                    st();

                                                <?php
                                            }
                                        ?>
                                    }
                                </script>


                                <script type="text/javascript">
                                function st(){
                                    var timeleft = 5;
                                    var downloadTimer = setInterval(function(){
                                    timeleft--;
                                    document.getElementById("countdowntimer").textContent = timeleft;
                                    if(timeleft <= 0){
                                        clearInterval(downloadTimer);
                                        document.getElementById("enter").disabled=false;
                                        document.getElementById("countdowntimer").innerHTML="";
                                        window.location = "index.php";
                                    }
                                    },1000);
                                }
                                </script>
                                
                                <div class="separator">
                                    <p class="change_link" id="log">Nuev@?
                                        <a href="registro.php" class="to_register">Regístrate</a>
                                     
                            </form>
                        </div>
                    </div>
                
            </div>
        </div>
    </body>
    
</html>  