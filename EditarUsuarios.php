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

$Cedula_Usuario = $_POST['Cedula2'];
$Nombre_Usuario=$_POST['Nombre2'];
$Apellido_Usuario=$_POST['Apellido2'];
$Login=$_POST['Login2'];
$Clave=$_POST['Clave2'];
$Correo_Usuario=$_POST['Correo2'];
$Telefono_Usuario=$_POST['Telefono2'];
$Celular_Usuario=$_POST['Celular2'];
$Fecha_Usuario=$_POST['Fecha2'];
$Direccion_Usuario=$_POST['Direccion2'];
$Nivel_Usuario_idNivel_Usuario=$_POST['Nivel_Usuario2'];
$Estados_idEstados=$_POST['Estados2'];

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

<h1>Modificar Usuario</h1>
<h4>Tecni Servicios E.E.C.C. C.A</h4>
<form id="form1" name="form1" method="post" action="ModificarUsuario.php" >
  <table width="249" border="0" align="left">
<!--     <tr>
      <td width="171">&nbsp;</td>
      <td width="68">&nbsp;</td> 
      <input name="Cedula2" type="hidden" value="<?php echo $Cedula ?>"/></td>
    </tr> -->
    <tr>
      <td>Cedula:</td>
      <td><label for="Cedula"></label>
        <input type="text" name="Cedula2" id="Cedula" value="<?php echo $Cedula_Usuario ?>"/></td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <td><label for="Nombre"></label>
      	<input type="text" name="Nombre2" id="Nombre" value="<?php echo $Nombre_Usuario ?>"/></td>
    </tr>
    <tr>
    <td>Apellido:</td>
      <td><label for="Nombre"></label>
        <input type="text" name="Apellido2" id="Nombre" value="<?php echo $Apellido_Usuario ?>"/></td>
    </tr>    
    <tr>
      <td>Login:</td>
      <td><label for="Login"></label>
      	<input type="text" name="Login2" id="Login" value="<?php echo $Login?>"/></td>
    </tr>
    <tr>
      <td>Clave:</td>
      <td><label for="Clave"></label>
      	<input type="password" name="Clave2" id="Clave" value="<?php echo $Clave ?>"/></td>
        <!-- <input type="text" name="Clave2" id="Clave" value="<?php echo $Clave ?>"/></td> -->
    </tr>  
    <tr>
      <td>Correo:</td>
      <td><label for="Correo"></label>
      	<input type="text" name="Correo2" id="Correo" value="<?php echo $Correo_Usuario ?>"/></td>
    </tr>
     <tr>
      <td>Telefono:</td>
      <td><label for="Telefono"></label>
        <input type="text" name="Telefono2" id="Telefono" value="<?php echo $Telefono_Usuario ?>"/></td>
    </tr> 
    <tr>
      <td>Celular:</td>
      <td><label for="Celular"></label>
        <input type="text" name="Celular2" id="Celular" value="<?php echo $Celular_Usuario ?>"/></td>
    </tr> 
    <tr>
      <td>Fecha:</td>
      <td><label for="Fecha"></label>
        <input type="text" name="Fecha2" id="Fecha" value="<?php echo $Fecha_Usuario ?>"/></td>
    </tr>
    <tr>
      <td>Direccion:</td>
      <td><label for="Direccion"></label>
        <input type="text" name="Direccion2" id="Direccion" value="<?php echo $Direccion_Usuario ?>"/></td>
    </tr>    
    <tr>
      <td>Nivel_Usuario:</td>
      <td><label for="Nivel_Usuario"></label>

       <SELECT name="Nivel_Usuario2" id="Nivel_Usuario">
          <option value='' selected>Seleccione </option>
          <?php
            $sqle2 = "SELECT * FROM nivel_usuario ORDER BY idNivel_Usuario";
            echo $sqle2;
            $sq2  = mysql_query($sqle2) or die( "Error en $sqle: " .mysql_error() );
             while($row = mysql_fetch_array($sq2)) 
              { 
                if ($Nivel_Usuario == $row["idNivel_Usuario"])
                  {
                    $selectd01 = "selected";
                  }
                else
                  {
                    $selectd01 = "";
                  }
                  echo "Nivel Usuario: " . $row["idNivel_Usuario"];
                ?>
                <OPTION VALUE= '<?PHP echo $row["idNivel_Usuario"]; ?>'<?PHP echo $selectd01 ?> > <?PHP echo $row["Descripcion_Nivel"]; ?> </OPTION>
                <?php
              } 
          ?>
        </SELECT> 

        <!-- <input type="text" name="Nivel_Usuario2" id="Nivel_Usuario" value="<?php echo $Nivel_Usuario_idNivel_Usuario ?>"/></td> -->
    </tr>      
    <tr>
    <td>Estados:</td>
      <td><label for="Estado"></label>

        <SELECT name="Estado2" id="Estado2">
          <option value='' selected>Seleccione </option>
          <?php
            $sqle = "SELECT * FROM estados ORDER BY Nombre_Estado";
            echo $sqle;
            $sq  = mysql_query($sqle) or die( "Error en $sqle: " .mysql_error() );
             while($row = mysql_fetch_array($sq)) 
              { 
                if ($Estado2 == $row["idEstados"])
                  {
                    $selectd01 = "selected";
                  }
                else
                  {
                    $selectd01 = "";
                  }
                  // echo "Estado: " . $row["idEstados"];
                ?>
                <OPTION VALUE= '<?PHP echo $row["idEstados"]; ?>'<?PHP echo $selectd01 ?> > <?PHP echo $row["Nombre_Estado"]; ?> </OPTION>
                <?php
              } 
          ?>
        </SELECT>

      	<!-- <input type="text" name="Estado2" id="Estado" value="<?php echo $Estados_idEstados ?>"/></td> -->
    </tr> 

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