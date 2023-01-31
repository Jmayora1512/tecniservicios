<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tecni Servicios E.E.C.C. C.A.</title>
</head>

<body>
<?php 
session_start();

if ($_SESSION['miSession']['Nivel_Usuario_idNivel_Usuario']==1){
	echo 'Tiene permiso <br>';
	echo $_SESSION['miSession']['Nombre'].'<br>';
	echo $_SESSION['miSession']['Usuario'].'<br>';
	echo $_SESSION['miSession']['Nivel_Usuario_idNivel_Usuario'].'<br>';
}else {
	echo 'No tiene permisos';
	?>
		<html>
			<head>
				<meta http-equiv="refresh" content="3; url= pidodatos.php">
			</head>
		</html>	
	<?php
}

?>
</body>
</html>