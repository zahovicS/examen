<?php 
	include "base.php";
	sup();
	include "menu.php";
	?>

<div class="formulario">
	<form action="procces.php" method="post">
		<h2 class="title">Coloca tu edad!</h2>
		<input type="number" name="edad" min="1" max="99">
		<button type="submit" name="formularioEdad">Verificar</button>
	</form>
</div>

<?php
	inf("edad");

 ?>