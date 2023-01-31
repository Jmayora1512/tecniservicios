<?php 
include ('configs/conexion.php');
$usuarioIng=$_POST['User'];
$passIng=$_POST['Pass'];

session_start();	
$consulta=mysql_query("select * from usuarios");

$Puerta='Continuar';

while($filas=mysql_fetch_array($consulta) and $Puerta='Continuar'){
	$Id=$filas['Id'];
	$Nombre=$filas['Nombre'];
    $Usuario=$filas['Usuario'];
	$Pass=$filas['Pass'];
	$Nivel_Usuario_idNivel_Usuario=$filas['Nivel_Usuario_idNivel_Usuario'];
    $Fecha=$filas['Fecha'];

    if (isset($usuarioIng) and isset($passIng)){
    	if ($Usuario==$usuarioIng and $Pass==$passIng){
    		echo 'Bienvenido'.$Nombre;
    		$miSession=array('id'=>$id,'Nombre'=>$Nombre,'Usuario'=>$Usuario,'Pass'=>$Pass,'Fecha'=>$Fecha,'Fecha'=>$Nivel_Usuario_idNivel_Usuario=>'Nivel_Usuario_idNivel_Usuario');
    		$_SESSION['miSession']=$miSession;
    		?>
			<html>
				<head>
					<meta http-equiv="refresh" content="3; url= restringida.php">
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
}
?>