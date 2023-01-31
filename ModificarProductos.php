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
            <!-- <li><a href="Mercancia.html">Mercancia</a></li>
            <li><a href="Venta.html">Venta</a></li>
            <li><a href="Reportes.html">Reportes</a></li> -->
            <!-- <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>            
            <li><a href="Registrarse.html Modulos.html">Registrarse</a></li>
            <li><a href="Login.html Modulos.html">Login</a></li> -->      
          </ul>

          <ul class="nav nav-pills">
            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Usuario
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="CargarUsuarios.php">Cargar Usuarios</a></li>
                                <li><a href="BuscarUsuarios.php">Buscar Usuarios</a></li>
              </ul>
            </li>

            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Mercancia
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="CargarProveedores.php">Cargar Proveedores</a></li>
                                <li><a href="BuscarProveedores.php">Buscar Proveedores</a></li>
                <li><a href="CargarProductos.php">Cargar Productos</a></li>
                <li><a href="BuscarProductos.php">Buscar Productos</a></li>
                <li><a href="Compra.php">Compra Productos</a></li>
                <!-- <li><a href="Devolucion.html">Devolucion</a></li> -->
              </ul>
            </li>

            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Ventas
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="CargarClientes.php">Cargar Clientes</a></li>
                <li><a href="BuscarClientes.php">Buscar Clientes</a></li>
                <li><a href="Facturacion.php">Venta</a></li>
              </ul>
            </li>           
            
            <!-- <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Reportes
                <b class="caret"></b>
              </a>
            </li> 
 -->
          </ul> 

        </div>
      </div>
    </div>
  </div>


<h1>Registro Modificado Producto</h1>
<h4>Tecni Servicios E.E.C.C. C.A</h4>
<?php 

	$Id=$_POST['Id2'];
	$Imagen=$_POST['Imagen2'];
	$Codigo=$_POST['Codigo2'];
    $Nombre=$_POST['Nombre2'];
    $Descripcion_Productos=$_POST['Desc2'];
    $Precio_Costo=$_POST['PrecioC2'];
    $Precio_Venta=$_POST['PrecioV2'];
    $Stock=$_POST['Stock2'];
    $Fecha_Creado=$_POST['Fecha2'];
    // $Categoria=$_POST['Categoria2'];


  $RecuperoArray=EncontrarReg($Id);

  $a=GrabarCambios($Id,$Imagen,$Codigo,$Nombre,$Descripcion_Productos,$Precio_Costo,$Precio_Venta,$Stock,$Fecha_Creado);
 // echo $RecuperoArray;
?>

<!-- <html>
   <head>
   	   <meta http-equiv="refresh" content="0; url=Buscar.php">
   </head>

</html> -->


  <script type="text/javascript" src="/bootstrap/curso/js/jquery.js"></script>
  <script type="text/javascript" src="/bootstrap/curso/js/bootstrap.js"></script>
</body>
</html>