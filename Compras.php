﻿<?php include ('configs/conexion.php');?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tecni Servicios E.E.C.C, C.A.</title>
   <?php 
      include "includes/estilo.php";
   ?>    
<style type="text/css">
body {
	background-color: #FFF;
}
</style>
</head>

<body>

   <?php 
     /* include "includes/header.php";*/
      include "includes/nav.php";
     /* include "includes/slider.php";*/
   ?>

<h1>Mi Tienda en Internet</h1>
<h4>Tecni Servicios E.E.C.C. C.A</h4>

<form id="form1" name="form1" method="post" action="">
  <table width="891" border="0" align="left">
    <tr>
      <td width="22">&nbsp;</td>
      <td width="92">&nbsp;</td>
      <td width="56">&nbsp;</td>  
      <td width="94" align="right">BUSCAR:</td>
      <td width="644"><label for="buscar"></label>
      <input type="text" name="buscar" id="buscar" /></td>
      <td width="167"><input type="submit" name="Aceptar" id="Aceptar" value="Aceptar" /></form></td>
      <td width="111">&nbsp;</td>
      <td width="321">&nbsp;</td>  
      <!-- <td width="267">&nbsp;</td>  -->
    </tr>
    <tr>
      <td colspan="8" align="center">LISTADO DE PRODUCTOS</td>
    </tr>
    <tr>
      <td width="2" bgcolor="#FF9900">ID</td>
      <td bgcolor="#FF9900">IMAGEN</td>
      <td bgcolor="#FF9900">CODIGO</td>
      <td bgcolor="#FF9900">NOMBRE</td>
      <td bgcolor="#FF9900">DESCRIPCION</td>
     <!--  <td bgcolor="#FF9900">Precio_Costo</td>  -->
      <td bgcolor="#FF9900">Precio_Venta</td>
      <td bgcolor="#FF9900">STOCK</td>
      <td bgcolor="#FF9900">FECHA</td>
      <!-- <td bgcolor="#FF9900">CATEGORIA</td> -->
      <td bgcolor="#FF9900">AGREGAR</td>
    </tr>
    <?php 

    $consulta=mysql_query("select * from productos");
      if (isset($_POST['buscar'])){
      $consulta=mysql_query("select * from productos where Codigo like '%".$_POST['buscar']."%'");
    }
  
    while($filas=mysql_fetch_array($consulta)){
      $Id=$filas['idProductos'];
      $Imagen=$filas['Imagen'];
      $Codigo=$filas['Codigo'];
      $Nombre=$filas['Nombre'];
      $Desc=$filas['Descripcion_Productos'];
      // $PrecioC=$filas['Precio_Costo'];
      $PrecioV=$filas['Precio_Venta'];
      $Stock=$filas['Stock'];
      $Fecha=$filas['Fecha_Creado'];
      // $Categoria=$filas['Categoria_idCategoria'];
      
         ?>
    <tr>
      <td bgcolor="#FFFADD"><?php echo $Id ?></td>
      <td><img src="<?php echo $Imagen; ?>" alt="" width="70" height="70" /><br /></td>
      <td bgcolor="#FFFADD"><?php echo $Codigo ?></td>
      <td bgcolor="#FFFADD"><?php echo $Nombre ?></td>
      <td bgcolor="#FFFADD"><?php echo $Desc ?></td>
      <!-- <td bgcolor="#FFFADD"><?php echo $PrecioC ?></td> -->
      <td bgcolor="#FFFADD"><?php echo $PrecioV ?></td>
      <td bgcolor="#FFFADD"><?php echo $Stock ?></td>
      <td bgcolor="#FFFADD"><?php echo $Fecha ?></td>
      <!-- <td bgcolor="#FFFADD"><?php echo $Categoria ?></td> -->
      <td bgcolor="#FFFADD">
      <form action="carrito.php" method="post" name="compra">
        <input name="id_txt" type="hidden" value="<?php echo $Id ?>" />
        <input name="nombre" type="hidden" value="<?php echo $Nombre ?>" />
        <input name="precio" type="hidden" value="<?php echo $PrecioV ?>" />
        <input name="cantidad" type="hidden" value="1" />
        <input name="Agregar" type="submit" value="Agregar" />
      </form>
      </td>
    </tr>
    <p>
      <?php }?>
      </table>
      
    </p>



<p><a href="carrito.php">Ver Carrito</a></p>

  
  <script type="text/javascript" src="/bootstrap/curso/js/jquery.js"></script>
  <script type="text/javascript" src="/bootstrap/curso/js/bootstrap.js"></script>

</body>
</html>