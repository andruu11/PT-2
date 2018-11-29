<?php
session_start();
require_once("../../default/default_administrador/main_administrador.php");
require_once("../../default/default_administrador/header_administrador.php");
require_once("../../default/default_administrador/footer_administrador.php");

require_once("../../default/default_administrador/sidebar_administrador.php");

$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
    $usu=$_SESSION['esteusuario'];
    $stmt = $db->prepare("select * from usuario where usuario=:us ");
    $stmt->execute(['us' => $usu]);
    $recuperar = $stmt->fetch();

    $usus =  $recuperar['id_cuenta'];



?>

    

 
                <!-- Page Content -->
                <h1><center>Editar usuarios en la cuenta: <?php echo $_SESSION["lacuenta"]; ?>.<center></h1>
                <hr>
                <p>Todos los usuarios:</p>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Datos Personales</th>
                            <th>Correo Electronico</th>
                            <th>Ciudad</th>
                            <th>Privilegio</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php
                        $db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
                        $stmt = $db->prepare("SELECT * FROM `usuario` INNER JOIN persona ON usuario.id_persona = persona.id_persona INNER JOIN tipo_usuario ON tipo_usuario.id_tipo_usuario = usuario.id_tipo_usuario INNER JOIN ciudad ON ciudad.id_ciudad = persona.id_ciudad where usuario!=:dif AND id_cuenta = :usus");
                        $stmt->execute(array(':dif' => $_SESSION['esteusuario'] ,':usus' => $usus));
                        while($row = $stmt->fetch()){
                            $id2 = $row['id_ciudad'];
                            $id3 = $row['id_tipo_usuario'];
                            $id1 = $row['id_usuario'];
                            $id4 = $row['id_persona'];
                        ?>
                        <tr>
                            <td><?php echo $row['usuario']; ?></td>
                            <td><?php echo $row['nombres'].$row['apellidos'];?></td>
                            <td><?php echo $row['correos']; ?></td> 
                            <td><?php echo $row['des_ciudad']; ?></td>
                            <td><?php echo $row['des_tipo_usuario']; ?></td>
                            <td><center><span <?php if($row['estado']==1){ ?> class="badge badge-success" style="width: 70px"; <?php }else { ?> class="badge badge-danger" style="width: 70px"; <?php } ?>       >      <?php if($row['estado']==1){ echo "ACTIVO"; }else { echo "INACTIVO";  } ?> </span></center></td>
                            <td>
                            <a href="#edit_<?php echo $row['usuario']; ?>" class="btn btn-warning" data-toggle="modal"><span class="fa fa-pencil-square-o"></span> Editar</a>
                            <a href="#delete_<?php echo $row['usuario']; ?>" <?php if($row['estado']==1){ ?> class="btn btn-danger" <?php }else{ ?> class="btn btn-success" <?php } ?> data-toggle="modal"><span class="fa fa-trash"></span> <?php if($row['estado']==1){ echo "Eliminar"; }else{ echo "Reactivar"; } ?> </a>
                            </td>
                            <?php include('../../default/default_administrador/modal_editar_usuarios.php'); ?>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            


            <?php 
    require_once("../../default/sidebarend.php");
    ?>
