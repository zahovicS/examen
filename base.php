<?php 
function sup()
{
	echo <<<HTML
<!DOCTYPE html>
<html>
<head>
	<title>Examen</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Blinker&display=swap');
	</style>
</head>
<body>
HTML;
}

function inf($obj)
{
	echo <<<HTML
<script type="text/javascript">
	$obj.className="activo";
</script>
</body>
</html>
HTML;

}
 ?>
<!--<div class="formulario">
	<h2 class="title">Nuevo Usuario</h2>
	<form action="procces.php" method="post">
		<input type="text" name="nombre" placeholder="Nombre" required="true">
		<input type="text" name="apellidos" placeholder="Apellidos" required="true">
		<button type="submit" name="formularioUser">Guardar!</button>
	</form>
</div>-->