<?php include ('configs/conexion.php');?>
<?php 
$RIF=$_POST['RIF'];
$a=BorrarP($RIF);

?>

<html>
   <head>
   	   <meta http-equiv="refresh" content="0; url=BuscarProveedores.php">
   </head>

</html>