<?php
include "conexion.inc.php";
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$paterno=$_GET["paterno"];
$materno=$_GET["materno"];
$fechanac=$_GET["fechanac"];
$departamento=$_GET["departamento"];
$edicion=$_GET["edicion"];
session_start();
/*echo "sesion ".$_SESSION["edicion"];*/
if (isset($_GET["Cancelar"])) 
{
	//header("Location: ejemplobd.php");
}
if ($edicion=="SI")
{
$sql="update persona set nombre='".$nombre."',";
$sql.="paterno='$paterno',";
$sql.="materno='$materno',";
$sql.="fechanac='$fechanac',";
$sql.="departamento='$departamento' where ci='$ci'";

}
else
{
$sql="insert into persona(ci,nombre,paterno,materno,fechanac,departamento)";
$sql.="values($ci,'$nombre','$paterno','$materno',$fechanac,'$departamento')";	
echo "Datos ingresados correctamente ";
echo "Bienvenido: ".$nombre;
}	
mysqli_query($con, $sql);
?>

<a href="ejemplobd.php">Retornar</a>