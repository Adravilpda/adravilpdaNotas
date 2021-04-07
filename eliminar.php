<?php
include "conexion.inc.php";
$ci=$_GET["ci"];
$resultado = mysqli_query($con, "delete from persona where ci='".$ci."'");
echo "Registro eliminado correctamente";
?>