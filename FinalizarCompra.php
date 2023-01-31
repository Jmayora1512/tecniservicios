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


<?php 
session_start();

  $RIF=$_POST['RIF2'];  
  $Empresa=$_POST['Empresa2'];

// Recorte finalizar compra

  $mi_carrito=$_SESSION['carrito'];
  $Pedido='

<h2>Gracias por su venta. <br></h2><h3>'.$Empresa. '</h3>


Saludos cordiales.

<br><br>';

if (isset($mi_carrito))
{
  $total = 0;
  $Pedido.='

<table width="366" border="0">
  <tr>
    <td colspan="4" align="center"> LISTADO DE COMPRAS</td>
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

$sql="INSERT INTO compras (Fecha_Compra,Monto_Compra,Proveedores_RIF) 
values ('".$Fecha."','".$total."','".$RIF."')";
 // echo $sql;
$res=mysql_query($sql,$conexion);

if ($res){
   echo 'Insercion con exito';
} else {

   echo 'No se pudo insertar';
}

$consulta=mysql_query("select max(idCompras) from compras");
$filas =mysql_fetch_row($consulta);
 // if ($filas)
 //       {
 //       echo 'No se pudo ejecutar la consulta'.mysql_error();
 //       }
  $idCompra=$filas[0];  


// echo $Compra;
  for ($i=0; $i < count($mi_carrito); $i++) 
  { 
    if ($mi_carrito[$i]<>NULL) 
    {
      $Id = $mi_carrito[$i]['id'];

      // $Compra = 22;
      // $Producto = $mi_carrito[$i]['nombre'];
      $Cantidad = $mi_carrito[$i]['cantidad'];
      $Monto = $mi_carrito[$i]['precio'];

       $sql2="INSERT INTO detalles_compra (Compras_idCompras,Productos_idProductos,Cantidad_Compra,Monto_Compra) 
          values ('".$idCompra."','".$Id."','".$Cantidad."','".$Monto."')";
       // echo $sql2;
       $res2=mysql_query($sql2,$conexion);

       if ($res2)
       {
       echo 'Insercion con exito';
       } else 
          {

            echo 'No se pudo insertar';
          }

$consulta2=mysql_query("select Stock from productos where idProductos = '".$Id."'");
$filas2 =mysql_fetch_row($consulta2);
$Stock = $filas2[0] + $Cantidad;  

    $sql3=mysql_query("UPDATE  productos SET  Stock ='".$Stock."' WHERE  idProductos ='".$Id."'");
       // echo $sql3;
       $res4=mysql_query($sql3,$conexion);

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