<?php
session_start();
require_once("../../default/default_administrador/main_administrador.php");
require_once("../../default/default_administrador/header_administrador.php");
require_once("../../default/default_administrador/footer_administrador.php");

require_once("../../default/default_administrador/sidebar_administrador.php");

if(isset($_POST['doc'])){
    
    $_SESSION['fecha_doc'] = $_POST['fecha_doc'];
    $_SESSION['nom_doc'] = $_POST['nom_doc'];
    $_SESSION['cate_doc'] = $_POST['cate_doc'];
    $_SESSION['mg'] = $_POST['mg'];
    $_SESSION['nmg'] = $_POST['nmg'];
    $_SESSION['fuentepdf'] = $_POST['fuentepdf'];
    $_SESSION['iddc'] = $_POST['iddcc'];


 	  #$message = $_SESSION['iddc'];
    #echo "<script type='text/javascript'>alert('$message');</script>";



    }

?>


<body>

<script>
        var but = document.getElementById("home-tab");
        but.click();
    </script>
       <!-- Bootstrap -->
    <!--<link href="../../assets/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Font Awesome -->
    <!--<link href="../../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
    <!-- Custom Theme Style -->
    <link href="../../assets/build/css/custom.min.css" rel="stylesheet">
            <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            




            <!-- user report -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h4><?php echo $_SESSION['nom_doc']; ?> <small style="padding-left: 450px;">Categoria: <?php echo $_SESSION['cate_doc']; ?></small></h4>
                    
                    <div class="clearfix"></div>
                  </div>





                  <div class="x_content"><!-- engloba contenido-->


                          <!--ADMIN: 1:ver mensajes 2:editar TODOS los mensajes 3:ver reportes-->
                          <!--TUTOR: 1:ver mensajes 2:editar SUS mensajes 3:ver favoritos-->
                          <!--FAMILIAR: 1:ver mensajes 2:editar SUS mensajes 3:ver favoritos-->


                          <!--==================================================================================-->
                          <!--*********************************   PAGE AREA   **********************************-->
                          <!--==================================================================================--> 
                    <div class="col-md-5 col-sm-3 col-xs-12 profile_left">
                      <center> <iframe src="../../<?php echo $_SESSION['fuentepdf']; ?>.pdf" width="90%" height="520px"></iframe></center>
                     
                         
                    <div>
                            
                            <label style="padding-left: 30px; font-size: 18px;"><?php echo $_SESSION['fecha_doc']; ?></label>
                            <label style="padding-left: 200px; font-size: 18px">
                            <a onclick="deac1()" id="like" href="../../../modelo/mg.php" class="fa fa-thumbs-up"><?php echo $_SESSION['mg']; ?></a>
                            <a href="../../../modelo/nmg.php" onclick="deac2()" id="dislike" class="fa fa-thumbs-down"><?php echo $_SESSION['nmg']; ?></a>
                          </label>
                          <script>
                            function deac1(){
                              //document.getElementById("like").style.pointer-events=none;
                            }
                          </script>
                          <script>
                            function deac2(){
                              //document.getElementById("dislike").href="#";
                            }
                          </script>
                          </div>
                    </div>


                      <!--==================================================================================-->
                      <!--*********************************   PAGE AREA   **********************************-->
                      <!--==================================================================================--> 


                    <div class="col-md-7 col-sm-9 col-xs-12">

                     
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">FORO</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">ADMINISTRAR</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">REPORTES</a>
                          </li>
                        </ul>

                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in"  id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <div style="overflow: scroll; height: 430px; ">
                             
                            <ul class="messages">
                                <?php
                                    $db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
                                        $stmt = $db->prepare("SELECT * FROM comentario WHERE id_documento= :iddoc");
                                        $stmt->execute(['iddoc' => $_SESSION['iddc']]);
                                        while($row = $stmt->fetch()){

                                        $stmt2 = $db->prepare("SELECT * FROM usuario WHERE id_usuario= :idusu");
                                        $stmt2->execute(['idusu' => $row['id_usuario']]);
                                        $recuperar = $stmt2->fetch();
                                        $idusu = $recuperar['usuario'];
                                        $usuimg = $recuperar['img_usu'];

                                ?>
                              <li>
                                <img src="../../../vista/assets/img/avatars/<?php echo $usuimg?>.png" width=60px;>
                                <h4 style="margin-left: 15px"><?php echo $idusu?></h4>

                                <div class="message_wrapper">
                                  <h4 class="heading"><?php echo $row['des_comentario'];?></h4> 
                                   <p style="text-align: right;" class="month"><?php echo $row['fecha_hora_comentario'];?></p>
                                </div>
                              </li>
                             <?php
                                }
                              ?>
                            </ul>
                            <!-- end recent activity -->
                             
                          </div><!-- scroll-->
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start recent activity -->
                            <div style="overflow: scroll; height: 430px; ">
                             <!--hacer-->

                             <ul class="messages">
                                <?php
                                    $db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
                                        $stmt = $db->prepare("SELECT * FROM comentario WHERE id_documento= :iddoc");
                                        $stmt->execute(['iddoc' => $_SESSION['iddc']]);
                                      while($row = $stmt->fetch()){

                                        $stmt2 = $db->prepare("SELECT * FROM usuario WHERE id_usuario= :idusu");
                                        $stmt2->execute(['idusu' => $row['id_usuario']]);
                                        $recuperar = $stmt2->fetch();
                                        #el idusu esta siendo utilizado para otra cosa
                                        $idusua = $recuperar['id_usuario'];
                                        $idusu = $recuperar['usuario'];
                                        $usuimg = $recuperar['img_usu'];
                                        $row['id_comentario'];
                                        $nu = $row['id_comentario'];
                                    

                                ?>

                                <!--mensaje-->

                              <li>
                                <form action="../../../modelo/modcomentario.php" method="post">
                                <img src="../../../vista/assets/img/avatars/<?php echo $usuimg; ?>.png" width=60px;>
                                <h4 style="margin-left: 15px"><?php echo $idusu; ?></h4>

                                <div class="message_wrapper">

                                  <input disabled onchange="apcamb(this.value)" style="border: 0px; font-size: 17px; color: #8A879C; font-weight: bold;" type="text" name="commentario" id="commentario" value="<?php echo $row['des_comentario']; ?>">

                                  <input hidden="true" style="border: 0px; font-size: 17px; color: #8A879C; font-weight: bold;" type="text" name="commentarioh" id="commentarioh" value="<?php echo $row['des_comentario']; ?>">

                                  <input hidden="true" style="border: 0px; font-size: 17px; color: #8A879C; font-weight: bold;" type="text" name="commentar" id="commentar" value="<?php echo $row['des_comentario']; ?>">
                                  <input hidden="true" type="text" name="idcom" value="<?php echo $row['id_comentario'];?>">
                                  <input hidden="true" type="text" name="idus" value="<?php echo $idusua; ?>">



                                  <!--botones-->
                                  <a href="#edit_<?php echo $row['usuario']; ?>" class="btn btn-warning" data-toggle="modal"><span class="fa fa-pencil-square-o"></span> Editar</a>
                                  
                                  <div class="input-group-btn" style="margin-left: 50%;">
                                    
                                    <span>
                                  <input onclick="activarap()" id ="btncom<?php //echo $nu ?>" class="btn btn-warning" type="button" style="font-size: 15px; color: white; " value="Modificar">
                                  </span>
                                  
                                  <span>
                                  <input disabled id ="btnguardar<?php //echo $nu ?>" name="btnguardar<?php //echo $nu ?>" class="btn btn-success" type="submit" style="font-size: 15px; color: white; " value="Aceptar">
                                  </span>
                                  
                                  <span>
                                  <input id ="btneli<?php //echo $nu ?>" type="button" style="font-size: 15px;" class="btn btn-danger" value="Eliminar">
                                  </span>
                                  

                                  <!--fecha-->

                                  </div>
                                   <p style="text-align: right;" class="month"><?php echo $row['fecha_hora_comentario'];?></p>

                                   <script>
                                        function apcamb(val){
                                       document.getElementById("commentar").value=val;
                                       }
                                  </script>
                                   <script>
                                     function activarap() {
                                        var input = document.getElementById("commentario");
                                        var text1 = document.getElementById("commentarioh").value;
                                          if (input.disabled == true){
                                             document.getElementById("commentario").disabled=false;
                                             document.getElementById("btnguardar").disabled=false;
                                            document.getElementById("btncom<?php //echo $nu ?>").value="Cancelar";
                                            } else {
                                              document.getElementById("btnguardar").disabled=true;
                                            document.getElementById("commentario").value=text1;
                                            document.getElementById("commentario").disabled=true;
                                            document.getElementById("btncom<?php //echo $nu ?>").value="Modificar";
                                            document.getElementById("commentar").value=text1;
                                           }
                                         }
                                    </script>
                                </div>
                              </form>
                              </li>


                              <!-- fin mensaje-->

                             <?php
                                }
                              ?>
                            </ul>
                            <!-- end recent activity -->
                            
                             </div>

                          </div>

                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                              photo booth letterpress, commodo enim craft beer mlkshk </p>
                          </div>
                        </div>
                      </div>
                      
                    </div>
<!--comment-->
<div class="container">
  <div class="row" style="padding-left: 20px;">
    <h3>Añadir comentario</h3>
  </div>
    
    <div class="row">
    
    <div class="col-md-12">
                <div class="widget-area no-padding blank">
                <div class="status-upload">
                  <form action="../../../modelo/comentar.php" method="post">
                    <textarea name="comentario" maxlength="600" style="width: 100%; height: 150px; font-size: 20px;" placeholder="Comenta..." ></textarea>
                    <input hidden="true" type="text" name="iddeldoc" value="<?php echo $_SESSION['iddc']; ?>">
                    <button type="submit" name="enviar" class="btn btn-success green"><i class="fa fa-share"></i> Enviar</button>
                  </form>
                </div><!-- Status Upload  -->
              </div><!-- Widget Area -->
            </div>
        
    </div>
    <style>.status-upload ul > li {
float: left;
padding-left: 50px;
}
.status-upload ul > li > a {
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #777777;
float: left;
font-size: 14px;
height: 30px;
line-height: 30px;
margin: 10px 0 10px 10px;
text-align: center;
-webkit-transition: all 0.4s ease 0s;
-moz-transition: all 0.4s ease 0s;
-ms-transition: all 0.4s ease 0s;
-o-transition: all 0.4s ease 0s;
transition: all 0.4s ease 0s;
width: 30px;
cursor: pointer;
}
.status-upload ul > li > a:hover {
background: none repeat scroll 0 0 #606060;
color: #fff;
}
.status-upload form button {
border: medium none;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #fff;
float: right;
font-family: Lato;
font-size: 14px;
letter-spacing: 0.3px;
margin-right: 9px;
margin-top: 9px;
padding: 6px 15px;
}
.dropdown > a > span.green:before {
border-left-color: #2dcb73;
}
.status-upload form button > i {
margin-right: 7px;
}
</style>


<!--comment-->

                  </div><!-- cierra todo -->


                </div>
              </div>
            </div><!-- user report end -->






          </div>
        </div>
        <!-- /page content -->


                             <!-- jQuery -->
    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script> 

       </body>




 <?php 
 require_once("../../default/sidebarend.php");
  ?>