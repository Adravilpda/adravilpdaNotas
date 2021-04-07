<?php
include "conexion.inc.php";
$usuario=$_GET["usuario"];
$password=$_GET["password"];
session_start();
$cuenta= mysqli_query($con, "select * from usuario join nota ON usuario.ci=nota.ci where
usuario='".$usuario."' and password='".$password."' ");
$cuenta2= mysqli_query($con, "select * from usuario join nota ON usuario.ci=nota.ci where
usuario='".$usuario."' and password='".$password."' ");
$fila2 = mysqli_fetch_array($cuenta);
?>
<?php if ($fila2==NULL){
	echo "Los datos son Erroneos";
?>
<h1><a href="acceder.php">REINTENTAR</a></h1>
<?php
}
else{
	if ($fila2['rol']=='docente'){
	echo "La cuenta es administrativa";
?>	
	<a href="promedios.php">Ver Promedios por Departamento</a>
<?php
	}
	else{
?>
<center><h1>Elige tu color preferido para tu tema de pantalla</H1>
<form>

<input type="button"
value="Blanco"
onClick="document.bgColor = '#FFFFFF';document.fgColor='#000000';">

<input type="button"
value="Verde"
onClick="document.bgColor = '#008000';document.fgColor='#FFFF00';">

<input type="button"
value="Azul"
onClick="document.bgColor = '#0000FF';document.fgColor='#00FFFF';">

<input type="button"
value="Rojo"
onClick="document.bgColor = '#FF0000';document.fgColor='#FFFF00';">

<input type="button"
value="Negro"
onClick="document.bgColor = '#000000';document.fgColor='#FFFFFF';">

<input type="button"
value="Amarillo"
onClick="document.bgColor = '#FFFF00';document.fgColor='#CD2626';">


</form></center>

<?php 
echo "<tr>";
echo "<h1>"."Bienvenido/a:"." "."<td>$fila2[usuario]</td>"."</h1>";
echo "</tr>";
 
?>
<h2>Notas por Materia</h2>
<table>
<tr>
	<td>Materia</td>
    <td>Nota1</td>
	<td>Nota2</td>
	<td>Nota3</td>
	<td>Total</td>
	
</tr>
<?php

while ($filan = mysqli_fetch_array($cuenta2))
		{
echo "<tr>";
echo "<td>$filan[sigla]</td>";
echo "<td>$filan[nota1]</td>";
echo "<td>$filan[nota2]</td>";
echo "<td>$filan[nota3]</td>";
echo "<td>$filan[notafinal]</td>";
echo "</tr>";
		}
	}
}
?>
</table>
 
