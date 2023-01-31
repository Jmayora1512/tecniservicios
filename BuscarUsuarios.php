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


<h1>Editar Usuarios</h1>
<h4>Tecni Servicios E.E.C.C. C.A</h4>

<form id="form1" name="form1" method="post" action="">
  <table width="1400" border="0" align="center">
    <tr>
      <td >&nbsp;</td>
      <td>&nbsp;</td> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>       
      <td>&nbsp;</td>   
      <td align="right">BUSCAR:</td>
      <td><label for="buscar"></label>
      <input type="text" name="buscar" id="buscar" /></td>
      <td width="167"><input type="submit" name="Aceptar" id="Aceptar" value="Aceptar" /></form></td>
 
    </tr>
    <tr>
      <td colspan="8" align="center">LISTADO DE USUARIOS</td>
    </tr>
    <tr>
      <!-- <td width="2" bgcolor="#FF9900">CEDULA</td> -->
      <td bgcolor="#FF9900" align="center">CEDULA</td>
      <td bgcolor="#FF9900" align="center">NOMBRE</td>
      <td bgcolor="#FF9900" align="center">APELLIDO</td>
      <td bgcolor="#FF9900" align="center">LOGIN</td>
      <td bgcolor="#FF9900" align="center">CLAVE</td>    
      <td bgcolor="#FF9900" align="center">CORREO</td>
      <td bgcolor="#FF9900" align="center">TELEFONO</td>
      <td bgcolor="#FF9900" align="center">CELULAR</td>
      <td bgcolor="#FF9900" align="center">FECHA</td>
      <td bgcolor="#FF9900" align="center">DIRECCION</td>
      <td bgcolor="#FF9900" align="center">NIVEL USUARIO</td>
      <td bgcolor="#FF9900" align="center">ESTADO</td>
      <td bgcolor="#FF9900" align="center">AGREGAR</td>
    </tr>
    <?php 

		$consulta=mysql_query("select * from usuario");
	    if (isset($_POST['buscar'])){
			$consulta=mysql_query("select * from usuario where Cedula_Usuario like '%".$_POST['buscar']."%'");
		}

		while($filas=mysql_fetch_array($consulta)){

$Cedula = $filas['Cedula_Usuario'];
$Nombre=$filas['Nombre_Usuario'];
$Apellido=$filas['Apellido_Usuario'];
$Login=$filas['Login'];
$Clave=$filas['Clave'];
$Correo=$filas['Correo_Usuario'];
$Telefono=$filas['Telefono_Usuario'];
$Celular=$filas['Celular_Usuario'];
$Fecha=$filas['Fecha_Usuario'];
$Direccion=$filas['Direccion_Usuario'];
$Nivel_Usuario=$filas['Nivel_Usuario_idNivel_Usuario'];
$Estado=$filas['Estados_idEstados'];

			
         ?>
      <td bgcolor="#FFFADD" align="center"><?php echo $Cedula ?></td>
      <td bgcolor="#FFFADD" align="center"><?php echo $Nombre ?></td>
      <td bgcolor="#FFFADD" align="center"><?php echo $Apellido ?></td>
      <td bgcolor="#FFFADD" align="center"><?php echo $Login ?></td>
      <td bgcolor="#FFFADD" align="center"><?php echo $Clave ?></td> 
      <td bgcolor="#FFFADD" align="center"><?php echo $Correo ?></td>
      <td bgcolor="#FFFADD" align="center"><?php echo $Telefono ?></td>
      <td bgcolor="#FFFADD" align="center"><?php echo $Celular ?></td>
      <td bgcolor="#FFFADD" align="center"><?php echo $Fecha ?></td>
      <td bgcolor="#FFFADD" align="center"><?php echo $Direccion ?></td>
      <td bgcolor="#FFFADD" align="center"><?php echo $Nivel_Usuario ?></td>
      <td bgcolor="#FFFADD" align="center"><?php echo $Estado ?></td>
      <td bgcolor="#FFFADD">
      <form action="EditarUsuarios.php" method="post" name="compra">
        <input name="Cedula2" type="hidden" value="<?php echo $Cedula ?>" />
        <input name="Nombre2" type="hidden" value="<?php echo $Nombre ?>" />
        <input name="Apellido2" type="hidden" value="<?php echo $Apellido ?>" />
        <input name="Login2" type="hidden" value="<?php echo $Login ?>" />
        <input name="Clave2" type="hidden" value="<?php echo $Clave ?>" />
        <input name="Correo2" type="hidden" value="<?php echo $Correo ?>" />
        <input name="Telefono2" type="hidden" value="<?php echo $Telefono ?>" />
        <input name="Celular2" type="hidden" value="<?php echo $Celular ?>" />
        <input name="Fecha2" type="hidden" value="<?php echo $Fecha ?>" />
        <input name="Direccion2" type="hidden" value="<?php echo $Direccion ?>" />
        <input name="Nivel_Usuario2" type="hidden" value="<?php echo $Nivel_Usuario ?>" />
        <input name="Estados2" type="hidden" value="<?php echo $Estado ?>" />
        <input name="Editar" type="submit" value="Editar" />
       </form>
       <form action="BorrarUsuario.php" method="post">
         <input name="Cedula" type="hidden" value="<?php echo $Cedula ?>" />
         <input name="Borrar" type="submit" value="Borrar" />
       </form>
      </td>
    </tr>
    <p>
      <?php }?>
      </table>
      
    </p>
  <script type="text/javascript" src="/bootstrap/curso/js/jquery.js"></script>
  <script type="text/javascript" src="/bootstrap/curso/js/bootstrap.js"></script>
</body>
</html>