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
 ?>

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


<h1>Modificar Producto</h1>
<h4>Tecni Servicios E.E.C.C. C.A</h4>
<form id="form1" name="form1" method="post" action="ModificarProductos.php" >
  <table width="249" border="0" align="left">
    <tr>
      <td width="171">&nbsp;</td>
      <td width="68">&nbsp;</td> 
      <input name="Id2" type="hidden" value="<?php echo $Id ?>"/></td>
    </tr>

    <tr>
      <td>Imagen:</td>
      <td><label for="Imagen"></label>
      	<input type="text" name="Imagen2" id="Imagen" value="<?php echo $Imagen ?>"/></td>
    </tr>

    <tr>
      <td>Codigo:</td>
      <td><label for="Codigo"></label>
      	<input type="text" name="Codigo2" id="Codigo" value="<?php echo $Codigo ?>"/></td>
    </tr>

    <tr>
      <td>Nombre:</td>
      <td><label for="Nombre"></label>
      	<input type="text" name="Nombre2" id="Nombre2" value="<?php echo $Nombre ?>"/></td>
    </tr>  

    <tr>
      <td>Descripcion:</td>
      <td><label for="Descripcion_Productos"></label>
      	<input type="text" name="Desc2" id="Descripcion_Productos" value="<?php echo $Descripcion_Productos ?>"/></td>
    </tr>
 
     <tr>
      <td>Precio_Costo:</td>
      <td><label for="Precio_Costo"></label>
        <input type="text" name="PrecioC2" id="Precio_Costo" value="<?php echo $Precio_Costo ?>"/></td>
    </tr>  
     
    <tr>
      <td>Precio_Venta:</td>
      <td><label for="Precio_Venta"></label>
      	<input type="text" name="PrecioV2" id="Precio_Venta" value="<?php echo $Precio_Venta ?>"/></td>
    </tr>    
 
    <tr>
      <td>Stock:</td>
      <td><label for="Stock"></label>
      	<input type="text" name="Stock2" id="Stock" value="<?php echo $Stock ?>"/></td>
    </tr> 

    <tr>
      <td>Fecha:</td>
      <td><label for="Fecha_Creado"></label>
      	<input type="text" name="Fecha2" id="Fecha_Creado" value="<?php echo $Fecha_Creado ?>"/></td>
    </tr> 

    <!-- <tr>
      <td>Categoria:</td>
      <td><label for="Categoria_idCategoria"></label>
      	<input type="text" name="Categoria2" id="Categoria_idCategoria"></td>
    </tr>  -->

    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td> 
    </tr>
 
    <tr>
	  <input type="submit" name="Modificar" id="Modificar"  value="Modificar" /> 
      <td>&nbsp;</td> 
    </tr> 
  </table>
</form>
  <script type="text/javascript" src="/bootstrap/curso/js/jquery.js"></script>
  <script type="text/javascript" src="/bootstrap/curso/js/bootstrap.js"></script>
</body>
</html>