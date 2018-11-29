<?php
session_start();
require_once("../../default/default_administrador/main_administrador.php");
require_once("../../default/default_administrador/header_administrador.php");
require_once("../../default/default_administrador/footer_administrador.php");
require_once("../../default/default_administrador/sidebar_administrador.php");


#$message = $cant;
#echo "<script type='text/javascript'>alert('$message');</script>";

?>

                <!--==================================================================================-->
                <!--*********************************   PAGE AREA   **********************************-->
                <!--==================================================================================--> 
               
<html lang="es">
<head>
    <title>combo</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=divice-width, user-scatable=no, initial-scale=1, maximun=scale=1, mininum-scale=1">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
</head>
<body>
    <header>
<nav class="menu">
    <ul>
        <h1></h1>
            <li><a href="reportes/index_rep4.php">Pie chart</a></li>
            <li><a href="reportes/index_rep1.php">Basic area</a></li>
            <li><a href="reportes/index_rep2.php">Basic column</a></li>
            <li><a href="reportes/index_rep3.php">Time series, zoomable</a></li>
    </ul>
</nav>
    </header>
</body>
                <!--==================================================================================-->
                <!--*********************************   PAGE AREA   **********************************-->
                <!--==================================================================================-->  
            
   <?php 

    require_once("../../default/sidebarend.php");
    ?>
