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