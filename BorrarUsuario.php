<?php include ('configs/conexion.php');?>
<?php 
$Id=$_POST['Cedula'];
$a=BorrarU($Id);

?>

<html>
   <head>
   	   <meta http-equiv="refresh" content="2; url=BuscarUsuarios.php">
   </head>

</html>