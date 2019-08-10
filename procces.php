<?php 
	include "base.php";
	sup();
	include "menu.php";
?>

<?php
extract($_POST);
function VerificarEdad($edad){
	if ($edad<18){
		echo "<h2 class='resultado'>Menor de Edad</h2>";
	}else{
		echo "<h2 class='resultado'>Mayor de Edad</h2>";
	}
}
function verificarUsuario($user,$pass){
	$usuario="zahovic";
	$password="clave2019";
	if ($user==$usuario && $pass==$password)
	{
		echo "<h2 class='resultado'>Correcto!</h2>";
	}
	else
	{
		echo "<h2 class='resultado'>Acceso Prohibido</h2s>";
	}
}
	if (isset($formularioUser))
	{
		echo "<h2 class='resultado'>usuario</h2>";
		echo "<h2 class='resultado'>Nombre: ",$nombre,"</h2>";
		echo "<h2 class='resultado'>Apellidos: ",$apellidos,"</h2>";
	}elseif (isset($formularioEdad)){
		VerificarEdad($edad);
	}elseif (isset($formularioIde)){
		verificarUsuario($user,$pass);
	}
?>
<script type="text/javascript">
	volver.addEventListener("click",()=>{
		window.location.href="index.php";
	});
</script>

<?php
	inf("");
 ?>