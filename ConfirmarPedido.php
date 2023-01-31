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

<h1>Confirmar Pedido</h1>

<form id="form1" name="form1" method="post" action="FinalizarPedido.php">
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
    session_start();
    $mi_carrito=$_SESSION['carrito'];
      if (isset($mi_carrito)){
	    $total=0;
		for ($i=0;$i<count($mi_carrito);$i++){
			if ($mi_carrito[$i]<>NULL)
			{
   ?>
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
    <td colspan="4" align="center"> DATOS PERSONALES</td>
  </tr>
    <tr bgcolor="#FFFADD">
      <td>Nombre:</td>
      <td><label for="Nombre"></label>
        <input type="text" name="Nombre2" id="Nombre"></td>
      <td bgcolor="#FFFADD">&nbsp;</td>
      <td bgcolor="#FFFADD">&nbsp;</td>
    </tr>
    <tr  bgcolor="#FFFADD">
      <td>Direccion:</td>
      <td><label for="Direccion"></label>
        <input type="text" name="Direccion2" id="Direccion"></td>
      <td bgcolor="#FFFADD">&nbsp;</td>
      <td bgcolor="#FFFADD">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFADD">
      <td>Telefono:</td>
      <td><label for="Telefono"></label>
        <input type="text" name="Telefono2" id="Telefono"></td>
      <td bgcolor="#FFFADD">&nbsp;</td>
      <td bgcolor="#FFFADD">&nbsp;</td>
    </tr>
    <tr  bgcolor="#FFFADD">
      <td>Correo:</td>
      <td><label for="Correo"></label>
        <input type="text" name="Correo2" id="Correo"></td>
      <td bgcolor="#FFFADD">&nbsp;</td>
      <td bgcolor="#FFFADD">&nbsp;</td>
    </tr>
  <tr>
    <td bgcolor="#AAAAAA">&nbsp;</td>
    <td bgcolor="#AAAAAA">&nbsp;</td>  



    <!-- <td bgcolor="#AAAAAA"><form id= "form1" name="form1"  action="FinalizarPedido.php" >  -->
      <input  type="submit" name="ConfirmarPedido" id="ConfirmarPedido" value="Comprar" />
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