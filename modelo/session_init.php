<?php
//nos conectamos a la base de datos
require'database.php';
require'sessions.php';
require'users.php';
$objuser = new Users();
$objuser->login_in();
?>