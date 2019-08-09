<?php 
	include "base.php";
	sup();
	include "menu.php";
	?>

	<div class="formulario">
		<h2 class="title">Nuevo Usuario</h2>
		<form action="procces.php" method="post">
			<input type="text" name="nombre" placeholder="Nombre" required="true">
			<input type="text" name="apellidos" placeholder="Apellidos" required="true">
			<button type="submit" name="formularioUser">Guardar!</button>
		</form>
	</div>

	<?php
		inf("inicio");
	?>