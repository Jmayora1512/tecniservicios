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

<p><h2>Detalle de compras</h2> </p>
<p>Sus compras hasta el momento son:</p>
<?php 
if (isset($_POST['id_txt'])){
	$id=$_POST['id_txt'];
	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$cantidad=$_POST['cantidad'];
	$mi_carrito[]=array('id'=>$id,'nombre'=>$nombre,'precio'=>$precio,'cantidad'=>$cantidad);
  	//print_r($mi_carrito);
}

session_start();

if (isset($_SESSION['carrito'])){
	    $mi_carrito=$_SESSION['carrito'];
			if (isset($_POST['id_txt'])){
				$id=$_POST['id_txt'];
				$nombre=$_POST['nombre'];
				$precio=$_POST['precio'];
				$cantidad=$_POST['cantidad'];
				$pos=-1;
				for($i=0;$i<count($mi_carrito);$i++){
					if($id==$mi_carrito[$i]['id']){
						$pos=$i;
					}
				}
				if($pos<>-1){
					$cuanto=$mi_carrito[$pos]['cantidad']+$cantidad;
					$mi_carrito[$pos]=array('id'=>$id,'nombre'=>$nombre,'precio'=>$precio,'cantidad'=>$cuanto);
				}else{
					$mi_carrito[]=array('id'=>$id,'nombre'=>$nombre,'precio'=>$precio,'cantidad'=>$cantidad);
					}
	}
}


if (isset($_POST['id2'])){
	$indice = $_POST['id2'];
	$cuanto = $_POST['cantidad2'];
	$mi_carrito[$indice]['cantidad'] = $cuanto;
}

if (isset($_POST['id3'])){
	$indice = $_POST['id3'];
	$mi_carrito[$indice] = NULL;
}

if (isset($mi_carrito)) $_SESSION['carrito']=$mi_carrito;


?>

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
  <?php
      if (isset($mi_carrito)){
	    $total=0;
		for ($i=0;$i<count($mi_carrito);$i++){
			if ($mi_carrito[$i]<>NULL)
			{
   ?>
  <tr>
    <td bgcolor="#FFFADD"><?php echo $mi_carrito[$i]['nombre'] ?></td>
    <td bgcolor="#FFFADD"><?php echo $mi_carrito[$i]['precio']  ?></td>
    <td bgcolor="#FFFADD">
    <form action="" method="post" name="actualizo">  
        <input name="id2" type="hidden" value="<?php echo $i ?>" />
        <input name="cantidad2" type="text" value="<?php echo $mi_carrito[$i]['cantidad']  ?>" size="3" maxlength="3" /> 
        <input name="" type="image" src="imagenes/actualizar.png" />	
    </form></td>
    </td>
    <?php 
		$subtotal=$mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
	    $total=$total+$subtotal;
	?>
    <td bgcolor="#FFFADD"><?php echo $subtotal ?> </td>
    <td bgcolor="#FFFADD"> <form action="" method="post"> 
    	<input name="id3" type="hidden" value="<?php echo $i ?>" />
        <input name="" type="image" src="imagenes/borrar.png" />
    </form></td>
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

  <tr>
    <td bgcolor="#FFFADD">&nbsp;</td>
    <td bgcolor="#FFFADD">&nbsp;</td>  
    <td bgcolor="#FFFADD"><form id= "form1" name="form1" action="confirmarCompra.php" method="post"> 
      <input  type="submit" name="ConfirmarCompra" id="ConfirmarCompra" value="Confirmar Compra" />
    </form></td>
    <td colspan="2" bgcolor="#FFFADD">&nbsp;</td> 
  </tr>
  <tr>
  </tr>
</table>
<p><a href="Facturacion.php">Volver</a></p>

<script type="text/javascript" src="/bootstrap/curso/js/jquery.js"></script>
  <script type="text/javascript" src="/bootstrap/curso/js/bootstrap.js"></script>
</body>
</html>