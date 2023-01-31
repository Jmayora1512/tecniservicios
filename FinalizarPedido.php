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

    
	$Nombre=$_POST['Nombre2'];
	$Direccion=$_POST['Direccion2'];
    $Telefono=$_POST['Telefono2'];
    $Correo=$_POST['Correo2'];
    
    $mi_carrito=$_SESSION['carrito'];
    $Pedido='

<h3>Gracias por su compra. <br></h3><h4>'.$Nombre. '</h4>
Tu transacci&oacute;n ha finalizado y te hemos enviado un recibo de tu compra por correo 
electr&oacute;nico.<br>
Un Vendedor de nuestra empresa lo llamara<br>

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

//*******************


// Varios destinatarios
$para  = $Correo . ', '; // atención a la coma
$para .= 'jorgemayora@cantv.net';

// título
$título = 'Su compra realizada fue: ';

// mensaje
$mensaje = $Pedido;

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Tecni Servicios E.E.C.C. C.A. <jorgemayora88@gmail.com>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);



//*******************

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