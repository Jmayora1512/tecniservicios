<?php include ('configs/conexion.php');?>
<?php 
$Id=$_POST['Cedula'];
$a=BorrarC($Id);

?>

<html>
   <head>
   	   <meta http-equiv="refresh" content="2; url=BuscarClientes.php">
   </head>

</html>