<?php
if (isset($_POST["buscar"])) {
 echo $_POST["buscar"];
}elseif (isset($_GET["variable"])) {
  echo "que pedo";
} 
?>