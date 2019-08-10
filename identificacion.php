<?php 
	include "base.php";
	sup();
	include "menu.php";
?>
<div class="formulario">
	<h2 class="title">Identificación</h2>
	<form action="procces.php" method="post">
		<input type="text" name="user" placeholder="Usuario">
		<input type="password" name="pass" placeholder="Contraseña">
		<button type="submit" name="formularioIde">Enviar</button>
	</form>
</div>
<?php
	inf("ide");
 ?>