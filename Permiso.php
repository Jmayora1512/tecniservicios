
<?php include ('configs/conexion.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tecni Servicios E.E.C.C. C.A.</title>



</head>

<body>
<?php 
session_start();

if ($_SESSION['miSession']['permiso']==1)
{

?>
<html>
   <head>
   	   <meta http-equiv="refresh" content="0; url=Buscar.php">
   </head>

</html>

<?php 
} else echo 'No tiene permiso';
?>

</body>
</html>