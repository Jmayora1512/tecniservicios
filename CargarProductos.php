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


<h1>Cargar Productos</h1>
<h4>Tecni Servicios E.E.C.C. C.A</h4>

<form id="form1" name="form1" method="post" action="RecibirProductos.php"  enctype="multipart/form-data">
  <table width="249" border="0" align="left">
    <tr>
      <td width="171">&nbsp;</td>
      <td width="68">&nbsp;</td> 
    </tr>

    <tr>
      <td>imagen:</td>
      <td><label for="imagen"></label>
      	<input type="file" name="imagen" id="imagen"></td>
    </tr>

    <tr>
      <td>Codigo:</td>
      <td><label for="Codigo"></label>
      	<input type="text" name="Codigo" id="Codigo"></td>
    </tr>

    <tr>
      <td>Nombre:</td>
      <td><label for="Nombre"></label>
      	<input type="text" name="Nombre" id="Nombre"></td>
    </tr>  

    <tr>
      <td>Descripcion:</td>
      <td><label for="Descripcion_Productos"></label>
      	<input type="text" name="Descripcion_Productos" id="Descripcion_Productos"></td>
    </tr>
 
     <tr>
      <td>Precio_Costo:</td>
      <td><label for="Precio_Costo"></label>
        <input type="text" name="Precio_Costo" id="Precio_Costo"></td>
    </tr>  
     
    <tr>
      <td>Precio_Venta:</td>
      <td><label for="Precio_Venta"></label>
      	<input type="text" name="Precio_Venta" id="Precio_Venta"></td>
    </tr>    
 
    <tr>
      <td>Stock:</td>
      <td><label for="Stock"></label>
      	<input type="text" name="Stock" id="Stock"></td>
    </tr> 

    <tr>
      <td>Fecha:</td>
      <td><label for="Fecha_Creado"></label>
      	<input type="text" name="Fecha_Creado" id="Fecha_Creado" value="<?php echo date("Y-m-d"); ?>"></td>
    </tr> 

   <!--  <tr>
      <td>Categoria:</td>
      <td><label for="Categoria_idCategoria"></label>
      	<input type="text" name="Categoria_idCategoria" id="Categoria_idCategoria"></td>
    </tr>  -->

    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td> 
    </tr>
 
    <tr>
	  <input type="submit" name="Aceptar" id="Aceptar"  value="Aceptar" /> 
      <td>&nbsp;</td> 
    </tr> 
  </table>
</form>
  
  <script type="text/javascript" src="/bootstrap/curso/js/jquery.js"></script>
  <script type="text/javascript" src="/bootstrap/curso/js/bootstrap.js"></script>

</body>
</html>