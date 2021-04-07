<center>
<?php
include "conexion.inc.php";
session_start();
$usuario="";
$password="";
?>

<form action="cuenta2.php" method="GET">
	Usuario	<input type="text" name="usuario" value="<?php echo $usuario;?>"/><br>
	Password <input type="text" name="password" value="<?php echo $password;?>"/><br>

	<input type="submit" name="Acceder" value="Acceder"/>
	<input type="submit" name="Cancelar" value="Cancelar"/>
	
</form>
</center>

