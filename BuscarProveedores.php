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

<h1>Editar Proveedores</h1>
<h4>Tecni Servicios E.E.C.C. C.A</h4>

<form id="form1" name="form1" method="post" action="">
  <table width="981" border="0" align="left">
    <tr>
      <td width="22">&nbsp;</td>
      <td width="92">&nbsp;</td> 
      <td width="56">&nbsp;</td>
      
      <td width="321">&nbsp;</td> 
         
      <td width="94" align="right">BUSCAR:</td>
      <td width="644"><label for="buscar"></label>
      <input type="text" name="buscar" id="buscar" /></td>
      <td width="167"><input type="submit" name="Aceptar" id="Aceptar" value="Aceptar" /></form></td>
      <td width="111">&nbsp;</td>
      <td width="100">&nbsp;</td> 
    </tr>
    <tr>
      <td colspan="8" align="center">LISTADO DE PROVEEDORES</td>
    </tr>
    <tr>
     <!--  <td width="2" bgcolor="#FF9900">ID</td> -->
      <td bgcolor="#FF9900">RIF</td>
      <td bgcolor="#FF9900">NOMBRE</td>
      <td bgcolor="#FF9900">APELLIDO</td>
      <td bgcolor="#FF9900">COMERCIO</td>
      <td bgcolor="#FF9900">DIRECCION</td> 
      <td bgcolor="#FF9900">FECHA</td>
      <td bgcolor="#FF9900">TELEFONO</td>
      <td bgcolor="#FF9900">CELULAR</td>
      <td bgcolor="#FF9900">ESTADOS</td>
      <td bgcolor="#FF9900">AGREGAR</td>
    </tr>
    <?php 

		$consulta=mysql_query("select * from proveedores");
    
	    if (isset($_POST['buscar'])){
			$consulta=mysql_query("select * from proveedores where RIF like '%".$_POST['buscar']."%'");
		}

		while($filas=mysql_fetch_array($consulta)){
			
			$RIF=$filas['RIF'];
      $Nombre=$filas['Nombre_Contacto'];
			$Apellido=$filas['Apellido_Contacto'];
			$Comercio=$filas['Nombre_Comercial'];
			$Direccion=$filas['Direccion_Comercio'];
      $Fecha=$filas['Fecha_Ingreso'];
			$Telefono=$filas['Telefono'];
      $Celular=$filas['Celular_Contacto'];
      $Estado=$filas['Estados_idEstados'];
		?>

      
      <td bgcolor="#FFFADD"><?php echo $RIF ?></td>
      <td bgcolor="#FFFADD"><?php echo $Nombre ?></td>
      <td bgcolor="#FFFADD"><?php echo $Apellido ?></td>
      <td bgcolor="#FFFADD"><?php echo $Comercio ?></td> 
      <td bgcolor="#FFFADD"><?php echo $Direccion ?></td>
      <td bgcolor="#FFFADD"><?php echo $Fecha ?></td>
      <td bgcolor="#FFFADD"><?php echo $Telefono ?></td>
      <td bgcolor="#FFFADD"><?php echo $Celular ?></td>
      <td bgcolor="#FFFADD"><?php echo $Estado ?></td>


      <td bgcolor="#FFFADD">
      <form action="EditarProveedores.php" method="post" name="compra">
        
        <input name="RIF2" type="hidden" value="<?php echo $RIF ?>" />
        <input name="Nombre2" type="hidden" value="<?php echo $Nombre ?>" />
        <input name="Apellido2" type="hidden" value="<?php echo $Apellido ?>" />
        <input name="Comercio2" type="hidden" value="<?php echo $Comercio ?>" />
        <input name="Direccion2" type="hidden" value="<?php echo $Direccion ?>" />
        <input name="Fecha2" type="hidden" value="<?php echo $Fecha ?>" />
        <input name="Telefono2" type="hidden" value="<?php echo $Telefono ?>" />
        <input name="Celular2" type="hidden" value="<?php echo $Celular ?>" />
        <input name="Estado2" type="hidden" value="<?php echo $Estado ?>" />
        <input name="Editar" type="submit" value="Editar" />
       </form>
       <form action="BorrarProveedores.php" method="post">
         <input name="RIF" type="hidden" value="<?php echo $RIF ?>" />
         <input name="Borrar" type="submit" value="Borrar" />
       </form>
      </td>
    </tr>
    <p>
      <?php  } ?>
      </table>
      
    </p>
  <script type="text/javascript" src="/bootstrap/curso/js/jquery.js"></script>
  <script type="text/javascript" src="/bootstrap/curso/js/bootstrap.js"></script>
</body>
</html>