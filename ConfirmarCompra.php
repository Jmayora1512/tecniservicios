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

  <?php
    session_start();
    $mi_carrito=$_SESSION['carrito'];
      if (isset($mi_carrito)){
      $total=0;
    for ($i=0;$i<count($mi_carrito);$i++){
      if ($mi_carrito[$i]<>NULL)
      {
   ?>

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


<h1>Confirmar Compra</h1>

<form id="form1" name="form1" method="post" action="FinalizarCompra.php">
<table width="283" border="0">
  <tr>
    <td colspan="4" align="center"> LISTADO DE SUS COMPRAS</td>
  </tr>
  <tr>
    <td width="43" bgcolor="#FF9900">PRODUCTO</td>
    <td width="43" bgcolor="#FF9900">PRECIO</td>
    <td width="43" bgcolor="#FF9900">CANTIDAD</td>
    <td width="126" bgcolor="#FF9900">SUBTOTAL</td>
  </tr>

  <tr>
    <td bgcolor="#FFFADD"><?php echo $mi_carrito[$i]['nombre'] ?></td>
    <td bgcolor="#FFFADD"><?php echo $mi_carrito[$i]['precio']  ?></td>
    <td bgcolor="#FFFADD"><?php echo $mi_carrito[$i]['cantidad']  ?></td>
    <?php 
		  $subtotal=$mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
	    $total=$total+$subtotal;
	  ?>
    <td bgcolor="#FFFADD"><?php echo $subtotal ?> </td>
    <td bgcolor="#FFFADD"></td>
  </tr>
  <?php 
  			} 
	  }
  }
  ?>
  <tr>
    <td bgcolor="#FFFADD">&nbsp;</td>
    <td bgcolor="#FFFADD">&nbsp;</td>
    <td bgcolor="#FFFADD">TOTAL</td>
    <td bgcolor="#FFFADD"><?php if (isset($total)) echo $total ?></td>
  </tr>
   <tr bgcolor="#FFFADD">
    <td colspan="4" align="center"> DATOS DE LA EMPRESA</td>
  </tr>
      <tr bgcolor="#FFFADD">
      <td>RIF:</td>
      <td><label for="RIF"></label>

        <SELECT name="RIF2" id="RIF2">
          <option value='' selected>Seleccione </option>
          <?php
            $sqler = "SELECT * FROM proveedores ORDER BY RIF";
            echo $sqler;
            $sqr  = mysql_query($sqler) or die( "Error en $sqle: " .mysql_error() );
             while($row = mysql_fetch_array($sqr)) 
              { 
                if ($RIF2 == $row["RIF"])
                  {
                    $selectd01 = "selected";
                  }
                else
                  {
                    $selectd01 = "";
                  }
                  echo "RIF: " . $row["RIF"];
                ?>
                <OPTION VALUE= '<?PHP echo $row["RIF"]; ?>'<?PHP echo $selectd01 ?> > <?PHP echo $row["RIF"]; ?> </OPTION>                
                <?php
              } 
          ?>
        </SELECT> 

        <!-- <input type="text" name="RIF2" id="RIF"></td>  -->
      <td bgcolor="#FFFADD">&nbsp;</td>
      <td bgcolor="#FFFADD">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFADD">
      <td>Empresa:</td>
      <td><label for="Empresa"></label>

        <SELECT name="Empresa2" id="Empresa2">
          <option value='' selected>Seleccione </option>
          <?php
            $sqlen = "SELECT * FROM proveedores ORDER BY Nombre_Comercial";
            echo $sqlen;
            $sqn  = mysql_query($sqlen) or die( "Error en $sqle: " .mysql_error() );
             while($row = mysql_fetch_array($sqn)) 
              { 
                if ($Empresa2 == $row["Nombre_Comercial"])
                  {
                    $selectd02 = "selected";
                  }
                else
                  {
                    $selectd02 = "";
                  }
                  echo "Empresa: " . $row["Nombre_Comercial"];
                ?>
                <OPTION VALUE= '<?PHP echo $row["Nombre_Comercial"]; ?>'<?PHP echo $selectd02 ?> > <?PHP echo $row["Nombre_Comercial"]; ?> </OPTION>
                <?php
              } 
          ?>
        </SELECT>        
        <!-- <input type="text" name="Nombre2" id="Nombre"></td> -->
      <td bgcolor="#FFFADD">&nbsp;</td>
      <td bgcolor="#FFFADD">&nbsp;</td>
    </tr>

<!-- Recorte confirmar compra -->
     
  <tr>
    <td bgcolor="#AAAAAA">&nbsp;</td>
    <td bgcolor="#AAAAAA">&nbsp;</td>  



    <!-- <td bgcolor="#AAAAAA"><form id= "form1" name="form1"  action="FinalizarPedido.php" >  -->
      <input  type="submit" name="ConfirmarCompra" id="ConfirmarCompra" value="Comprar" />
    </form></td>
    <td colspan="2" bgcolor="#AAAAAA">&nbsp;</td> 
  </tr>
  <tr>
  </tr>
</table>
</form>	

  <script type="text/javascript" src="/bootstrap/curso/js/jquery.js"></script>
  <script type="text/javascript" src="/bootstrap/curso/js/bootstrap.js"></script>

</body>
</html>