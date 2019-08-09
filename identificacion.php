<?php 
	include "base.php";
	sup();
	include "menu.php";
?>

	<form action="procces.php" method="post">
		<input type="text" name="user" placeholder="Usuario">
		<input type="password" name="pass" placeholder="Contraseña">
		<button type="submit" name="formularioIde">Enviar</button>
	</form>

<?php
	inf("ide");
 ?>