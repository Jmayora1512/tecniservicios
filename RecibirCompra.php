<?php include ('configs/conexion.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tecni Servicios E.E.C.C. C.A.</title>
  <link rel="stylesheet" href="/bootstrap/curso/css/bootstrap.css"> 
  <link rel="stylesheet" href="/bootstrap/curso/css/bootstrap-responsive.css">  
  <link rel="stylesheet" href="/bootstrap/curso/css/estilos.css">   
<style type="text/css">
body {
  background-color: #FFF;
}
</style>
</head>

<body>

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a href="#" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a href="index.html" class="brand">Tecni Servicios E.E.C.C, C.A.</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="index.html">Inicio</a></li>
            <li><a href="Servicios.html">Servicios</a></li>
            <li><a href="Productos.html">Productos</a></li>
            <li><a href="Compras.php">Compras</a></li>
            <li><a href="Noticias.html">Noticias</a></li>
            <li><a href="Contacto.html">Contacto</a></li>
            <li><a href="Modulos.html">Modulos</a></li>   
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>            
            <!-- <li><a href="Registrarse.html Modulos.html">Registrarse</a></li>
            <li><a href="Login.html Modulos.html">Login</a></li>   -->    
          </ul>             
        </div>
      </div>
    </div>
  </div>

<h1>Cliente Cargado</h1>
<h4>Tecni Servicios E.E.C.C. C.A</h4>





<?php 
//  print_r($_FILES);
// echo'<br>';
// echo 'nombre de la imagen: ';
// print_r($_FILES['imagen']['name']);

// echo'<br>';
// echo 'tipo de la imagen: ';
// print_r($_FILES['imagen']['type']);

// echo'<br>';
// echo 'ruta temporal de la imagen: ';
// print_r($_FILES['imagen']['tmp_name']);
 



$Cedula = $_POST['Cedula'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo'];
$Fecha=$_POST['Fecha'];
$Telefono=$_POST['Telefono'];
$Celular=$_POST['Celular'];
$Direccion=$_POST['Direccion'];
$Estado=$_POST['Estados_idEstados'];
echo'<br>';

$sql="INSERT INTO clientes (Cedula_Cliente,Nombre_Cliente,Apellido_Cliente,Correo_Cliente,Fecha_Ingreso,Telefono_Cliente,Celular_Cliente,Direccion_Cliente,Estados_idEstados) 
values ('".$Cedula."','".$Nombre."','".$Apellido."','".$Correo."','".$Fecha."','".$Telefono."','".$Celular."','".$Direccion."','".$Estado."')";
 // echo $sql;
$res=mysql_query($sql,$conexion);

if ($res){
   echo 'Insercion con exito';
} else {

   echo 'No se pudo insertar';
}

?>

  <script type="text/javascript" src="/bootstrap/curso/js/jquery.js"></script>
  <script type="text/javascript" src="/bootstrap/curso/js/bootstrap.js"></script>

</body>
</html>