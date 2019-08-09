<?php 
	include "base.php";
	sup();
	include "menu.php";
?>


<div class="volver">
	<button id="volver">Atras</button>
</div>

<?php
extract($_POST);
function VerificarEdad($edad){
	if ($edad<18){
		echo "<h2>Menor de Edad<h2/>";
	}else{
		echo "<h2>Mayor de Edad<h2/>";
	}
}
function verificarUsuario($user,$pass){
	$usuario="zahovic";
	$password="clave2019";
	if ($user==$usuario && $pass==$password)
	{
		echo "Correcto!";
	}
	else
	{
		echo "Acceso Prohibido";
	}
}
	if (isset($formularioUser))
	{
		echo "<h2>Usuario: </h2>",$nombre," ",$apellidos;
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