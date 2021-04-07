<?php
include "conexion.inc.php";
session_start();
$ci="";
$nombre="";
$paterno="";
$materno="";
$fechanac="";
$departamento="";
$edicion="NO";
$_SESSION["edicion"]="NO";
if (isset($_GET["ci"])) /*Pregunta si ci esta instanciada*/
{
$ci=$_GET["ci"];  /*variable toma el valor del array */
$resultado = mysqli_query($con, "select * from persona where ci='".$ci."'");/*Consulta por el ci*/
$fila = mysqli_fetch_array($resultado); /*crea nuevo array con los datos del ci */
$ci=$fila['ci']; 
$nombre=$fila['nombre'];
$paterno=$fila['paterno'];
$materno=$fila['materno'];
$fechanac=$fila['fechanac'];
$departamento=$fila['departamento'];
$edicion="SI";

$_SESSION["edicion"]="SI";
}
?>
<form action="guardar.php" method="POST">
	CI	<input type="text" name="ci" value="<?php echo $ci;?>"/><br>
	Nombre <input type="text" name="nombre" value="<?php echo $nombre;?>"/><br>
	Paterno <input type="text" name="paterno" value="<?php echo $paterno;?>"/><br>
	Materno <input type="text" name="materno" value="<?php echo $materno;?>"/><br>
	FechaNac <input type="text" name="fechanac" value="<?php echo $fechanac;?>"/><br>
	Departamento <input type="text" name="departamento" value="<?php echo $departamento;?>"/><br>
	
	<input type="hidden" name="edicion" value="<?php echo $edicion;?>"/><br>
	<input type="submit" name="Aceptar" value="Aceptar"/>
	<input type="submit" name="Cancelar" value="Cancelar"/>
</form>