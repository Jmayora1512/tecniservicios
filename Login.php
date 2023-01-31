<?php 
include ('configs/conexion.php');
$usuarioIng=$_POST['User'];
$passIng=$_POST['Pass'];

session_start();	
$consulta=mysql_query("select * from usuario");

$Puerta='Continuar';

while($filas=mysql_fetch_array($consulta) and $Puerta='Continuar'){
	$Id=$filas['Cedula_Usuario'];
	$Nombre=$filas['Nombre_Usuario'];
	$Apellido=$filas['Apellido_Usuario'];
    $Usuario=$filas['Login'];
	$Pass=$filas['Clave'];
	$Nivel_Usuario_idNivel_Usuario=$filas['Nivel_Usuario_idNivel_Usuario'];
    $Fecha=$filas['Fecha_Usuario'];

    if (isset($usuarioIng) and isset($passIng)){
    	if ($Usuario==$usuarioIng and $Pass==$passIng){
    		echo 'Bienvenido '.$Nombre.' '.$Apellido;
    		$miSession=array('Cedula_Usuario'=>$Id,'Nombre_Usuario'=>$Nombre,'Apellido_Usuario'=>$Apellido,'Login'=>$Usuario,
    			'Clave'=>$Pass,'Fecha_Usuario'=>$Fecha,'Nivel_Usuario_idNivel_Usuario'=>$Nivel_Usuario_idNivel_Usuario);
    		$_SESSION['miSession']=$miSession;
    		?>
			<html>
				<head>
					<meta http-equiv="refresh" content="3; url= Modulos.php">
				</head>
			</html>
			<?php
			$Puerta='Salir';
			exit;
		}else{
				$Resultado='No';
			}
	}

}
if ($Resultado=='No'){
	echo 'Su usuario o contraseña no se encontraron.';
	?>
			<html>
				<head>
					<meta http-equiv="refresh" content="3; url= index.php">
				</head>
			</html>

	<?php
}
?>