<?php
session_start();
require_once("../../default/default_tutor/main_tutor.php");
require_once("../../default/default_tutor/header_tutor.php");
require_once("../../default/default_tutor/footer_tutor.php");

require_once("../../default/default_tutor/sidebar_tutor.php");


$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
    $usu=$_SESSION['esteusuario'];
    $stmt = $db->prepare("select * from usuario where usuario=:us ");
    $stmt->execute(['us' => $usu]);
    $recuperar = $stmt->fetch();

    $idusu = $recuperar['id_usuario'];
    $imgusu = $recuperar['img_usu'];
    $pin = $recuperar['pin'];
    $idper = $recuperar['id_persona'];
    $_SESSION["idpersona"]=$idper;

    $stmt2 = $db->prepare("select * from persona where id_persona=:pers ");
    $stmt2->execute(['pers' => $idper]);
    $recuperar2 = $stmt2->fetch();

    $nom = $recuperar2['nombres'];
    $ap = $recuperar2['apellidos'];
    $mail = $recuperar2['correos'];
    $ciu = $recuperar2['id_ciudad'];
    
    

    $stmt3 = $db->prepare("select des_ciudad from ciudad where id_ciudad=:ciu ");
    $stmt3->execute(['ciu' => $ciu]);
    $recuperar3 = $stmt3->fetch();

    $ciudadd = $recuperar3['des_ciudad'];
    #$message = $ciudadd;
    #echo "<script type='text/javascript'>alert('$message');</script>";

?>



                <!--==================================================================================-->
                <!--*********************************   PAGE AREA   **********************************-->
                <!--==================================================================================--> 

                    <div id="page-wrapper">
                        <div class="container-fluid">
                            <div class="row bg-title">
                                
                                <div class="col-lg-12 col-sm-1 col-md-1 col-xs-12">
                                    
                                    <ol class="breadcrumb">
                                        <div class="col-lg-3 col-md-1 col-sm-1 col-xs-9">
                                    <h1 class="page-title">Perfil</h1> </div>
                                        <h4  style="padding-left: 500px">Cuenta: Tutor</h4>
                                    </ol>
                                </div>
                            </div>
                            <!-- /.row -->
                            <!-- .row -->
                            <div class="row">
                                <div class="col-md-4 col-xs-12">
                                    <div class="white-box">
                                        <div class="user-bg"> <img width="100%" alt="user" src="../../assets/img/avatars/<?php echo $imgusu ?>.png"">
                                            <div class="overlay-box">
                                                <div class="user-content">

                                                    <form method="post" action="../../../modelo/updtperfusu.php">
                                                        <a>Cambiar imagen? </a><input onclick="camimg()" type="checkbox" name="chki">
                                                        <a>Seleccione una imagen y presione guardar.</a>
                                                        <script> function camimg(){
                                                            if(document.getElementById("cambiodeimagen").hidden==true){
                                                            document.getElementById("cambiodeimagen").hidden=false;
                                                        }else{
                                                            document.getElementById("cambiodeimagen").hidden=true;
                                                            document.getElementById("imgusu").value=<?php echo $imgusu ?>;
                                                        }
                                                        }
                                                        </script>



                                                        <div class="form-group" hidden="true" id="cambiodeimagen">
                                                            <div class="col-sm-12">
                                                                <div id="carouselExampleIndicators" class="carousel slide" data-interval="false">
                                                                    <div class="carousel-inner" role="listbox">
                                                                        <div class="carousel-item active">
                                                                            <div class="row">
                                                                                <div class="col-sm-7">
                                                                                    <img onclick="svim(1,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="../../assets/img/avatars/1.png" alt="First slide">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <div class="row">
                                                                                <div class="col-sm-7">
                                                                                    <img onclick="svim(2,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="../../assets/img/avatars/2.png" alt="First slide">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <div class="row">
                                                                                <div class="col-sm-7">
                                                                                    <img onclick="svim(3,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="../../assets/img/avatars/3.png" alt="First slide">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <div class="row">
                                                                                <div class="col-sm-7">
                                                                                    <img onclick="svim(4,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="../../assets/img/avatars/4.png" alt="First slide">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <div class="row">
                                                                                <div class="col-sm-7">
                                                                                    <img onclick="svim(5,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="../../assets/img/avatars/5.png" alt="First slide">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <div class="row">
                                                                                <div class="col-sm-7">
                                                                                    <img onclick="svim(6,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="../../assets/img/avatars/6.png" alt="First slide">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <div class="row">
                                                                                <div class="col-sm-7">
                                                                                    <img onclick="svim(7,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="../../assets/img/avatars/7.png" alt="First slide">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <div class="row">
                                                                                <div class="col-sm-7">
                                                                                    <img onclick="svim(8,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="../../assets/img/avatars/8.png" alt="First slide">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <div class="row">
                                                                                <div class="col-sm-7">
                                                                                    <img onclick="svim(9,this.id)" style="margin-left: 87px" class="d-block img-fluid" src="../../assets/img/avatars/9.png" alt="First slide">
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
                                                                    document.getElementById("clikid");
                                                                    alert("Imagen seleccionada");
                                                                }
                                                            </script>
                                
                                                        </div>

                                                        <!--guardar este campooooo-->
                                                        <input hidden="true" id="imgusu" type="number" name="imgusuu" value="<?php echo $imgusu ?>" class="form-control"/>
                                                        <div class="form-group">
                                                            <br>
                                                            <div class="input-group">
                                                                <h4 class="text-blue">Usuario:</h4>
                                                                <input disabled onchange="modusu(this.value)" style="font-weight: bold; margin-left: 10px" id="elus" type="text" value=<?php echo $_SESSION['esteusuario']; ?> class="form-control form-control-line"><input hidden="true" style="font-weight: bold; margin-left: 10px" id="elush" type="text" value=<?php echo $_SESSION['esteusuario']; ?> class="form-control form-control-line">
                                                                <!--modificar este campo-->
                                                                <input hidden="true" style="font-weight: bold; margin-left: 10px" id="elusmod" name="elusumodif" type="text" value=<?php echo $_SESSION['esteusuario']; ?> class="form-control form-control-line"><span class="input-group-btn">
                                                                <input onclick="activarusu()" id ="btnus" type="button" class="btn btn-primary" value="MODIFICAR">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            function modusu(val){
                                                                document.getElementById("elusmod").value=val;
                                                            }
                                                        </script>
                                                        <script>
                                                            function activarusu() {
                                                                var input = document.getElementById("elus");
                                                                var text = document.getElementById("elus").value;
                                                                var text1 = document.getElementById("elush").value;
                                                                if (input.disabled == true){
                                                                    document.getElementById("elus").disabled=false;
                                                                    document.getElementById("btnus").value="CANCELAR";
                                                                } else {
                                                                    document.getElementById("elus").value=text1;
                                                                    document.getElementById("elus").disabled=true;
                                                                    document.getElementById("btnus").value="MODIFICAR";
                                                                    document.getElementById("elusmod").value=text1;
                                                                }
                                                            }
                                                        </script>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <h4 style="padding-left: 113px" class="text-blue">Pin:</h4>
                                                                    <input style="margin-left: 10px" id="p1" type="password" placeholder="Cambiar pin? (4 digitos)" maxlength="4" class="form-control form-control-line">
                                                            </div>
                                                            <div style="padding-top: 5px" class="input-group">
                                                                <h4 class="text-blue">Confirmar Pin:</h4>
                                                                    <input onchange="ver()" style="margin-left: 10px" id="p2" type="password" placeholder="" maxlength="4" class="form-control form-control-line">
                                                            </div>
                                                        </div>


                                                        <!--guardar este datoooooo-->
                                                        <input hidden="true" style="margin-left: 10px" name="pinmodif" id="p3" value="<?php echo $pin ?>" type="password" maxlength="4" class="form-control form-control-line">

                                                        <div class="form-group">
                                                            <div class="col-sm-12">
                                                                <a>Acepta modificar datos de usuario</a><input onclick="actvt()" type="checkbox" name="ck">
                                                                <button style="margin-left: 257px" disabled id="btndngr" name="botonguardarusuario" class="btn btn-danger">Guardar</button>
                                                            </div>
                                                        </div>
                                                        <script> function actvt(){
                                                            if(document.getElementById("btndngr").disabled==true){
                                                            document.getElementById("btndngr").disabled=false;
                                                        }else{
                                                            document.getElementById("btndngr").disabled=true;
                                                        }
                                                        }
                                                        </script>
                                                        <script>
                                                            function ver(){
                                                                var pin1 = document.getElementById("p1").value;
                                                                var pin2 = document.getElementById("p2").value;
                                                                if(pin1!=pin2){
                                                                    alert("Los pins no son iguales. Intente nuevamente.");
                                                                    window.location.reload();
                                                                }else{
                                                                    document.getElementById("p3").value=pin1;
                                                                }
                                                            }
                                                        </script>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- numeros de telefono por si acaso-->

                                        <!--<div class="user-btm-box">
                                            <div class="col-md-4 col-sm-4 text-center">
                                                <p class="text-purple"><i class="ti-facebook"></i></p>
                                                <h1>258</h1> </div>
                                            <div class="col-md-4 col-sm-4 text-center">
                                                <p class="text-blue"><i class="ti-twitter"></i></p>
                                                <h1>125</h1> </div>
                                            <div class="col-md-4 col-sm-4 text-center">
                                                <p class="text-danger"><i class="ti-dribbble"></i></p>
                                                <h1>556</h1> </div>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <div class="white-box">
                                        <form class="form-horizontal form-material" action="../../../modelo/updtperf.php" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Nombres</label>
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <input disabled id="elnom" onchange="nomcamb(this.value)" type="text" value=<?php echo $nom ?> class="form-control form-control-line">
                                                        <input hidden="true" id="elnomh" type="text" value=<?php echo $nom ?> class="form-control form-control-line">
                                                        <!--guardar-->
                                                        <input hidden="true" id="nommod" name="nommod" type="text" value=<?php echo $nom ?> class="form-control form-control-line">
                                                        <span class="input-group-btn">
                                                            <input onclick="activarnombre()" id ="btnnom" type="button" class="btn btn-primary" value="MODIFICAR">
                                                        </span>
                                                        <!--<label style="font-weight: bold; padding-left: 10px; padding-top: 5px;">Modificar:<input style="margin-left: 20px;" type="checkbox" id="myCheck"  onclick="myFunction()"></label> //este codigo era para tener un checkbox//-->
                                                        <script>
                                                            function nomcamb(val){
                                                                document.getElementById("nommod").value=val;
                                                            }
                                                        </script>
                                                        <script>
                                                            function activarnombre() {
                                                                var input = document.getElementById("elnom");
                                                                var text = document.getElementById("elnom").value;
                                                                var text1 = document.getElementById("elnomh").value;
                                                                if (input.disabled == true){
                                                                    document.getElementById("elnom").disabled=false;
                                                                    document.getElementById("btnnom").value="CANCELAR";
                                                                } else {
                                                                    document.getElementById("elnom").value=text1;
                                                                    document.getElementById("elnom").disabled=true;
                                                                    document.getElementById("btnnom").value="MODIFICAR";
                                                                    document.getElementById("nommod").value=text1;
                                                                }
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12">Apellidos</label>
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <input disabled id="elap" onchange="apcamb(this.value)" type="text" value=<?php echo $ap ?> class="form-control form-control-line">
                                                        <input hidden="true" id="elaph" type="text" value=<?php echo $ap ?> class="form-control form-control-line">
                                                        <!--guardar-->
                                                        <input hidden="true" id="apmod" name="apmod" type="text" value=<?php echo $ap ?> class="form-control form-control-line">
                                                        <span class="input-group-btn">
                                                            <input onclick="activarap()" id ="btnap" type="button" class="btn btn-primary" value="MODIFICAR">
                                                        </span>
                                                        <script>
                                                            function apcamb(val){
                                                                document.getElementById("apmod").value=val;
                                                            }
                                                        </script>
                                                        <script>
                                                            function activarap() {
                                                                var input = document.getElementById("elap");
                                                                var text = document.getElementById("elap").value;
                                                                var text1 = document.getElementById("elaph").value;
                                                                if (input.disabled == true){
                                                                    document.getElementById("elap").disabled=false;
                                                                    document.getElementById("btnap").value="CANCELAR";
                                                                } else {
                                                                    document.getElementById("elap").value=text1;
                                                                    document.getElementById("elap").disabled=true;
                                                                    document.getElementById("btnap").value="MODIFICAR";
                                                                    document.getElementById("apmod").value=text1;
                                                                }
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <input disabled type="email" onchange="mailcamb(this.value)" value=<?php echo $mail ?> class="form-control form-control-line" name="example-email" id="example-email">
                                                        <input hidden="true" type="email" value=<?php echo $mail ?> class="form-control form-control-line" name="example-emailh" id="example-emailh">
                                                        <!--guardar-->
                                                        <input hidden="true" type="email" value=<?php echo $mail ?> class="form-control form-control-line" name="example-emailmod" id="example-emailmod">
                                                        <span class="input-group-btn">
                                                            <input onclick="activarmail()" id ="btnmail" type="button" class="btn btn-primary" value="MODIFICAR">
                                                        </span>
                                                        <script>
                                                            function mailcamb(val){
                                                                document.getElementById("example-emailmod").value=val;
                                                            }
                                                        </script>
                                                        <script>
                                                            function activarmail() {
                                                                var input = document.getElementById("example-email");
                                                                var text = document.getElementById("example-email").value;
                                                                var text1 = document.getElementById("example-emailh").value;
                                                                if (input.disabled == true){
                                                                    document.getElementById("example-email").disabled=false;
                                                                    document.getElementById("btnmail").value="CANCELAR";
                                                                } else {
                                                                    document.getElementById("example-email").value=text1;
                                                                    document.getElementById("example-email").disabled=true;
                                                                    document.getElementById("btnmail").value="MODIFICAR";
                                                                    document.getElementById("example-emailmod").value=text1;
                                                                }
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Ciudad</label>
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <input disabled id="lac" type="text" value=" <?php echo $ciudadd;  ?> " class="form-control form-control-line"><p id="par" style="padding-left: 10px"></p>
                                                        <select style="margin-left: 10px" disabled onchange="ciucamb()" hidden="hidden" id="laco" class="select_single form-control" tabindex="-1" name="ciudad">
                                                            <option></option>
                                                            <option value="La Paz">La Paz</option>
                                                            <option value="El Alto">El Alto</option>
                                                            <option value="Cochabamba">Cochabamba</option>
                                                            <option value="Santa Cruz">Santa Cruz</option>
                                                            <option value="Chuquisaca">Chuquisaca</option>
                                                            <option value="Potosí">Potosí</option>
                                                            <option value="Oruro">Oruro</option>
                                                            <option value="Pando">Pando</option>
                                                            <option value="Beni">Beni</option>
                                                            <option value="Tarija">Tarija</option>
                                                        </select>
                                                        <input hidden="true" id="lach" type="text" value="<?php echo $ciudadd ?>" class="form-control form-control-line">
                                                        <!--guardar este valor-->
                                                        <input hidden="true" id="ciumod" name="ciumod" type="text" value="<?php echo $ciudadd ?>" class="form-control form-control-line">
                                                        <span class="input-group-btn">
                                                            <input onclick="activarcity()" id ="btncity" type="button" class="btn btn-primary" value="MODIFICAR">
                                                        </span>
                                                        <!--<input onclick="a()" id ="btncit" type="button" class="btn btn-primary" value="MOD">
                                                        <script>
                                                            function a() {
                                                                alert(document.getElementById("laco").value);
                                                            }
                                                        </script>-->
                                                        <script>
                                                            function ciucamb(){
                                                                document.getElementById("ciumod").value=document.getElementById("laco").value;
                                                            }
                                                        </script>
                                                        <script>
                                                            function activarcity() {
                                                                var input = document.getElementById("laco");
                                                                var text = document.getElementById("lac").value;
                                                                var text1 = document.getElementById("lach").value;
                                                                if (input.disabled == true){
                                                                    document.getElementById("par").innerHTML="Cambiar a: ";
                                                                    document.getElementById("laco").disabled=false;
                                                                    document.getElementById("btncity").value="CANCELAR";
                                                                    document.getElementById("laco").hidden=false;
                                                                } else {
                                                                    document.getElementById("par").innerHTML="";
                                                                    document.getElementById("laco").hidden=true;
                                                                    document.getElementById("laco").disabled=true;
                                                                    document.getElementById("lac").value=text1;
                                                                    document.getElementById("btncity").value="MODIFICAR";
                                                                    document.getElementById("ciumod").value=text1;
                                                                }
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" name="guardarpersona" class="btn btn-success">Guardar datos</button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        
                    </div>

                <!--==================================================================================-->
                <!--*********************************   PAGE AREA   **********************************-->
                <!--==================================================================================-->  
            <?php 
    require_once("../../default/sidebarend.php");
    ?>

   
