<?php
session_start();
require_once("../../default/default_administrador/main_administrador.php");
require_once("../../default/default_administrador/header_administrador.php");
require_once("../../default/default_administrador/footer_administrador.php");

require_once("../../default/default_administrador/sidebar_administrador.php");
$_SESSION['mg']=0;
$_SESSION['nmg']=0;
?>


    <link href="../../assets/dc/assets/css/style.css" rel="stylesheet">
    <link href="../../assets/dc/assets/css/style-responsive.css" rel="stylesheet">

    <script src="../../assets/dc/assets/js/jquery.js"></script>
    <!--end enlaces -->
<style>
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.container {
    position: relative;
    text-align: center;
    color: white;
}

.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
    font-size: 12px;
    color: white;
    text-shadow: 2px 2px #000;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
    font-size: 20px;
    color: white;
    text-shadow: 2px 2px #000;
}

.top-right {
    position: absolute;
    bottom: 25px;
    left: 16px;
    font-size: 20px;
    color: white;
    text-shadow: 2px 2px #000;
}

.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
    font-size: 20px;
    color: white;
    text-shadow: 2px 2px #000;
}

</style> 

                <!--==================================================================================-->
                <!--*********************************   PAGE AREA   **********************************-->
                <!--==================================================================================--> 

         <!--main content start-->
        <section class="wrapper site-min-height">
            <h3 style="margin-top: -50px;"> <i class="fa fa-angle-right"></i> Documentos Academicos </h3>
                            <hr>
                          
            <main class="page service-page">
                <section class="clean-block clean-services dark">
                    <div class="container" style="margin-top: 50px">
                        <div class="row ">
                            <?php 
                            $db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
                            $stmt2 = $db->prepare("select * from categoria");
                            $stmt2->execute();
                            while($row = $stmt2->fetch()){

                            ?>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc"> 
                            <div class="project-wrapper">
                                <div class="project">
                                
                                    <div class="photo-wrapper">
                                        <div class="photo">
                                            <a class="fancybox" href="foro.php?variable=<?php echo $row['id_categoria']?>">
                                           
                                            <img class="img-responsive" src="../../assets/dc/assets/img/portfolio/port04.jpg" alt="">
                                              <div class="top-left">
                                                <?php echo $row['des_categoria']?></div>
                                            </a>
                                        </div>  
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                            </div>
                             <br>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </main>
        
        </section><!--/wrapper -->

                <!--==================================================================================-->
                <!--*********************************   PAGE AREA   **********************************-->
                <!--==================================================================================--> 


               
       

    <!--common script for all pages-->
    <script src="../../assets/dc/assets/js/common-scripts.js"></script>

    <!--script for this page-->
  
  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });

  </script>
  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>

     <?php 
    require_once("../../default/sidebarend.php");
    ?>
