<?php
include "conexion.inc.php";
$resultado = mysqli_query($con, "select * from persona");
$resultado2 = mysqli_query($con, "select * from usuario");
//print_r($resultado);
echo "<br>";
?>
<table>
<tr>
    <td>Usuario</td>
	<td>CI</td>
	<td>Nombre</td>
	<td>Paterno</td>
	<td>Materno</td>
	<td>FechaNacimiento</td>
	<td>Departamento</td>
	
</tr>
<?php
while ($fila = mysqli_fetch_array($resultado) and $fila2 = mysqli_fetch_array($resultado2))
{
echo "<tr>";
echo "<td>$fila2[usuario]</td>";
echo "<td>$fila[ci]</td>";
echo "<td>".$fila["nombre"]."</td>";
echo "<td>$fila[paterno]</td>";
echo "<td>$fila[materno]</td>";
echo "<td>$fila[fechanac]</td>";
echo "<td>$fila[departamento]</td>";
echo "<td><a href='editar.php?ci=$fila[ci]'>Editar</a></td>";
echo "<td><a href='eliminar.php?ci=$fila[ci]'>Eliminar</a></td>";
echo "</tr>";
}
?>
</table>
<?php
echo "<a href='editar.php'>Registrarse</a>";
?>

