<?php include ('configs/conexion.php');?>
<?php 
$Id=$_POST['Id'];
$a=Borrar($Id);

?>

<html>
   <head>
   	   <meta http-equiv="refresh" content="0; url=BuscarProductos.php">
   </head>

</html>