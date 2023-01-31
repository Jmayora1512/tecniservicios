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

<?php 
session_start();

  $Cedula=$_POST['Cedula2'];  
  $Nombre=$_POST['Nombre2'];
  $Apellido=$_POST['Apellido2'];
  $Correo=$_POST['Correo2'];    
  $Telefono=$_POST['Telefono2'];
  $Celular=$_POST['Celular2'];
  $Direccion=$_POST['Direccion2'];
  $Estado=$_POST['Estado2']; 
  $FormaPago=$_POST['FormaPago2']; 

  $mi_carrito=$_SESSION['carrito'];
  $Pedido='

<h2>Gracias por su compra. <br></h2><h3>'.$Nombre. '</h3>
Su compra ha finalizado puede pasar por el almacen a retirar sus productos<br>

Saludos cordiales.

<br><br>';

if (isset($mi_carrito))
{
  $total = 0;
  $Pedido.='

<table width="366" border="0">
  <tr>
    <td colspan="4" align="center"> LISTADO DE SUS COMPRAS</td>
  </tr>
  <tr align="center">
    <td width="126" bgcolor="#FF9900">PRODUCTO</td>
    <td width="43" bgcolor="#FF9900">PRECIO</td>
    <td width="43" bgcolor="#FF9900">CANTIDAD</td>
    <td width="126" bgcolor="#FF9900">SUBTOTAL</td>
  </tr>

  ';

  for ($i=0; $i < count($mi_carrito); $i++) 
  { 
    if ($mi_carrito[$i]<>NULL) 
    {
      $subtotal=$mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
        $total=$total+$subtotal;
        $Pedido.='
        <tr align="center">
          <td bgcolor="#FFFADD">'.$mi_carrito[$i]['nombre'].'</td>
          <td bgcolor="#FFFADD">'.$mi_carrito[$i]['precio'].'</td>
          <td bgcolor="#FFFADD">'.$mi_carrito[$i]['cantidad'].'</td>
          <td bgcolor="#FFFADD">'.$subtotal.'</td>
        </tr>';
    }
  }
$Pedido.='<tr align="right"><td> Total: '.$total;

$Pedido.='</td></tr>';

echo $Pedido;



}


$Fecha = date("Y-m-d");

$sql="INSERT INTO clientes (Cedula_Cliente,Nombre_Cliente,Apellido_Cliente,Correo_Cliente,Fecha_Ingreso,Telefono_Cliente,Celular_Cliente,Direccion_Cliente,Estados_idEstados) 
values ('".$Cedula."','".$Nombre."','".$Apellido."','".$Correo."','".$Fecha."','".$Telefono."','".$Celular."','".$Direccion."','".$Estado."')";
  echo $sql;
$res=mysql_query($sql,$conexion);

if ($res){
   echo 'Insercion con exito';
} else {

   echo 'No se pudo insertar';
}



// $idClientes = 12876372;
// $Fecha = date("Y-m-d");

$sql2="INSERT INTO ventas (Fecha_Venta,Monto_Venta,Clientes_Cedula_Cliente,Forma_Pago_idForma_Pago) 
values ('".$Fecha."','".$total."','".$Cedula."','".$FormaPago."')";
 echo $sql2;
$res2=mysql_query($sql2,$conexion);

if ($res2){
   echo 'Insercion con exito';
} else {

   echo 'No se pudo insertar';
}

$consulta=mysql_query("select max(idVentas) from ventas");
$filas =mysql_fetch_row($consulta);
 // if ($filas)
 //       {
 //       echo 'No se pudo ejecutar la consulta'.mysql_error();
 //       }
  $Venta=$filas[0];  


// echo $Venta;
  for ($i=0; $i < count($mi_carrito); $i++) 
  { 
    if ($mi_carrito[$i]<>NULL) 
    {
      $Id = $mi_carrito[$i]['id'];

      // $Venta = 22;
      // $Producto = $mi_carrito[$i]['nombre'];
      $Cantidad = $mi_carrito[$i]['cantidad'];
      $Monto = $mi_carrito[$i]['precio'];

       $sql3="INSERT INTO detalles_ventas (Productos_idProductos,Ventas_idVentas,Cantidad_Producto,Monto) 
          values ('".$Id."','".$Venta."','".$Cantidad."','".$Monto."')";
       echo $sql3;
       $res3=mysql_query($sql3,$conexion);

       if ($res3)
       {
       echo 'Insercion con exito';
       } else 
          {

            echo 'No se pudo insertar';
          }

$consulta2=mysql_query("select Stock from productos where idProductos = '".$Id."'");
$filas2 =mysql_fetch_row($consulta2);
$Stock = $filas2[0] - $Cantidad;  

    $sql4=mysql_query("UPDATE  productos SET  Stock ='".$Stock."' WHERE  idProductos ='".$Id."'");
       echo $sql4;
       $res4=mysql_query($sql4,$conexion);

    }
  }

?>

 

<?php
//libera la sesión actual, elimina cualquier dato de la sesión.
session_destroy();

/* liberarán las variables de sesión registradas, quitandoles el valor contenido en ellas
si no se hace esto aunque la pagina sea cerrada siempre conservaran su valor y cualquier
persona podra ingresar a la sesion*/
unset($_SESSION["carrito"]);
?>
  <script type="text/javascript" src="/bootstrap/curso/js/jquery.js"></script>
  <script type="text/javascript" src="/bootstrap/curso/js/bootstrap.js"></script>

</body>
</html>