<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link rel="stylesheet" href="vista/assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="vista/assets/fonts/simple-line-icons.min.css"/>

    <link href="vista/assets/reg/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="vista/assets/reg/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="vista/assets/reg/style.css" rel="stylesheet"/>
    <script>
   function sololetras(e){
    key=e.keyCode || e.which;
    teclado= String.fromCharCode(key).toLowerCase();
    letras=" abcdefghijklmnñopqrstuvwxyz";
    especiales="80-37-38-46-164";
    teclado_especial= false;
    for (var i in especiales) {
      if (key==especiales[i]) {
        teclado_especial=true;break;
      }
    }
    if (letras.indexOf(teclado)==-1 && !teclado_especial) {
      return false;
    }
  }  

</script>
<script>
    function solonumeros(key) {
           //getting key code of pressed key
           var keycode = (key.which) ? key.which : key.keyCode;
           //comparing pressed keycodes

           if (keycode > 31 && (keycode < 48 || keycode > 57)) {
               //alert(" You can enter only characters 0 to 9 ");
               return false;
           }
           else return true;


       }
</script>
</head>
<body>
            
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        
        <div class="container">
            <h4 class="text-info"><?php echo "Cuenta: "; echo $_SESSION["lacuenta"]; ?></h4>
        </div>
        <div class="block-heading">
            <a class="navbar-brand logo" href="login2.php">Atrás</a>
            <!--<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>-->
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registra un nuevo usuario</h2>
                    <p>El usuario será agregado a esta cuenta.</p>
                </div>
                <form action="modelo/save2.php" method="post">
                    <!--Datos-->
                    <h4>Ingrese sus datos personales</h4>
                            <div class="form-group">
                                <label>Nombres:</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre completo"/>
                            </div>

                            <!--apellidos-->
                            <div class="form-group">
                                <label>Apellidos:</label>
                                <input type="text" onkeypress="return sololetras(event)" name="apellidop" id="apellidop" class="form-control" placeholder="Ingrese su Apellido paterno"/><br><input type="text" onchange="conk()"  onkeypress="return sololetras(event)" name="apellidom" id="apellidom" class="form-control" placeholder="Ingrese su Apellido materno"/>
                                <input hidden="true" type="text" name="apellido" id="apellido" class="form-control"/>
                                <script>
                                    function conk(){
                                        var apps = document.getElementById("apellidop").value;
                                        apps=apps+" "+document.getElementById("apellidom").value;
                                        document.getElementById("apellido").value=apps;
                                    }
                                </script>
                            </div>

                            <div class="form-group">
                                <label>Correo electronico:</label>
                                <input type="email" name="correo" class="form-control" placeholder="Ej.: alguien@correo.com"/>
                            </div>

                            <!--ciudad-->

                            <div class="form-group">
                                <label>Seleccione su Ciudad</label>
                                <div class="col-md-5 col-sm-7 col-xs-7" >
                                    <select class="select_single form-control" tabindex="-1" name="ciudad">
                                        <option></option>
                                        <option value="1">La Paz</option>
                                        <option value="10">El Alto</option>
                                        <option value="4">Cochabamba</option>
                                        <option value="9">Santa Cruz</option>
                                        <option value="5">Chuquisaca</option>
                                        <option value="3">Potosí</option>
                                        <option value="2">Oruro</option>
                                        <option value="7">Pando</option>
                                        <option value="8">Beni</option>
                                        <option value="6">Tarija</option>
                                    </select>
                                </div>
                            </div>
                    <hr>

                    <!--Usuario-->
                    <h4>Cree su usuario</h4> 
                    <div class="col-sm-12">
                                <div id="carouselExampleIndicators" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <img onclick="svim(1,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="vista/assets/img/avatars/1.png" alt="First slide">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <img onclick="svim(2,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="vista/assets/img/avatars/2.png" alt="First slide">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <img onclick="svim(3,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="vista/assets/img/avatars/3.png" alt="First slide">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <img onclick="svim(4,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="vista/assets/img/avatars/4.png" alt="First slide">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <img onclick="svim(5,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="vista/assets/img/avatars/5.png" alt="First slide">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <img onclick="svim(6,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="vista/assets/img/avatars/6.png" alt="First slide">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <img onclick="svim(7,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="vista/assets/img/avatars/7.png" alt="First slide">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <img onclick="svim(8,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="vista/assets/img/avatars/8.png" alt="First slide">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <img onclick="svim(9,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="vista/assets/img/avatars/9.png" alt="First slide">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a style="background-color: #98AFC7;" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span  class="sr-only">Previous</span>
                                    </a>
                                    <a style="background-color: #98AFC7;" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span  class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <style>
img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
</style>
                            <script>
                                function svim(numbb,clikid){
                                    document.getElementById("imgusu").value=numbb;
                                    document.getElementById("clikid")
                                    alert("Imagen seleccionada");
                                }
                            </script>
                                <input hidden="true" id="imgusu" type="number" name="imgusu" value="1" class="form-control"/> 
                                <div class="form-group">
                                    <label>Nombre de usuario:</label>
                                    <input type="text" name="usuario" class="form-control" placeholder="Nickname"/>
                                </div>
                                <div class="form-group">
                                    <label>Pin:</label>
                                    <input type="password" maxlength="4" onkeypress="return solonumeros(event)" name="pin1" id="p1" class="form-control" placeholder="Ingrese un pin de 4 digitos."/>
                                </div>
                                <input hidden="true" type="password" maxlength="4" id="p3" name="pin" class="form-control"/>
                                <div class="form-group">
                                    <label>Reingrese su Pin :</label>
                                    <input type="password" maxlength="4" onchange="ver()" id="p2" onkeypress="return solonumeros(event)" name="pin2" class="form-control" placeholder="verificar el pin"/>
                                </div>
                                <script>
                                    function ver(){
                                        var pin1 = document.getElementById("p1").value;
                                        var pin2 = document.getElementById("p2").value;
                                            if(pin1!=pin2){
                                                alert("Los pins no son iguales. Intente nuevamente.");
                                                    document.getElementById("p1").value="";
                                                    document.getElementById("p2").value="";
                                            }else{
                                                document.getElementById("p3").value=pin1;
                                            }
                                            }
                                </script>

                            <!--tipo-->

                            <div class="form-group">
                                <label>Tipo de usuario</label>
                                <p>Especifique si este usuario es un familiar o un tutor de la persona con TEA</p>
                                <div class="col-md-5 col-sm-7 col-xs-7" >
                                    <select class="select_single form-control" tabindex="-1" name="tipo">
                                        <option></option>
                                        <?php if($_SESSION["lacuenta"]=="admin"){
                                            ?>
                                            <option value="1">Admin</option>
                                            <?php
                                        } ?>
                                        <option value="2">Tutor</option>
                                        <option value="3">Familiar</option>
                                        
                                    </select>
                                </div>
                            </div>
                    <hr>

                    <button class="btn btn-primary btn-block" type="submit" name="save2">Agregar</button>
                    <!--<button type="submit" name="save" class="btn btn-primary btn-submit">Guardar</button>-->
                </form>
            </div>
        </section>
    </main>
    
    <script src=>"vista/assets/js/jquery.min.js"</script>
    <script src="vista/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="vista/assets/js/theme.js"></script>

    <script src="vista/assets/reg/js/jquery.min.js"></script>
    <script src="vista/assets/reg/js/popper.min.js"></script>
    <script src="vista/assets/reg/js/bootstrap.min.js"></script>
    <script src="vista/assets/reg/script.js"></script>
</body>

</html>