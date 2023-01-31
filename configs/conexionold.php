<?php 
$conexion=mysql_connect('localhost','root','') or die('No hay conexión a la base de datos');
$db=mysql_select_db('inventario',$conexion)or die('no existe la base de datos.');


function ActualizarStock($id,$can)
{

	$consulta=("select * from productos where id=$id");
	$res=mysql_query($consulta);
	$filas=mysql_fetch_array($res);
	$Stock=$filas['Stock'];

	if (isset($id))
	{
		$can=$Stock-$can;
		$cad="UPDATE productos set Stock='$can' where id=$id";
		mysql_query($cad);
		//echo $cad;
		echo '<p>Registro Actualizado!</p>';
	}

}

?>

>
//       </table>
// <?php }?>// <?php function verListadoProductos($modo) {?>
// <form id="form1" name="form1" method="post" action="">
//   <table width="841" border="0" align="left">
//     <tr>
//       <td width="22">&nbsp;</td>
//       <td width="92">&nbsp;</td> 
//       <td width="111">&nbsp;</td>
//      <!--  <td width="121">&nbsp;</td> -->
//      <!--  <td width="56">&nbsp;</td>   -->
//       <td width="94" align="right">BUSCAR:</td>
//       <td width="644"><label for="buscar"></label>
//       <input type="text" name="buscar" id="buscar" /></td>
//       <td width="167"><input type="submit" name="Aceptar" id="Aceptar" value="Aceptar" /></form></td>
//     </tr>
//     <tr>
//       <td colspan="8" align="center">LISTADO DE PRODUCTOS</td>
//     </tr>
//     <tr>
//       <td width="2" bgcolor="#FF9900">ID</td>
//       <td bgcolor="#FF9900">IMAGEN</td>
//       <td bgcolor="#FF9900">CODIGO</td>
//       <td bgcolor="#FF9900">NOMBRE</td>
//       <td bgcolor="#FF9900">DESCRIPCION</td>
//      <!--  <td bgcolor="#FF9900">Precio_Costo</td>  -->
//       <td bgcolor="#FF9900">Precio_Venta</td>
//       <td bgcolor="#FF9900">STOCK</td>
//       <td bgcolor="#FF9900">FECHA</td>
//       <td bgcolor="#FF9900">CATEGORIA</td>
//       <td bgcolor="#FF9900">AGREGAR</td>
//     </tr>
//     <?php 

//    $consulta=mysql_query("select * from productos");
//      if (isset($_POST['buscar'])){
//      $consulta=mysql_query("select * from productos where nombre like '%".$_POST['buscar']."%'");
//    }
  
//    while($filas=mysql_fetch_array($consulta)){
//      $Id=$filas['idProductos'];
//      $Imagen=$filas['Imagen'];
//       $Codigo=$filas['Codigo'];
//      $Nombre=$filas['Nombre'];
//      $Desc=$filas['Descripcion_Productos'];
//      $PrecioC=$filas['Precio_Costo'];
//       $PrecioV=$filas['Precio_Venta'];
//      $Stock=$filas['Stock'];
//      $Fecha=$filas['Fecha_Creado'];
//       $Categoria=$filas['Categoria_idCategoria'];
      
//          ?>
//     <tr>
//      <?php if ($modo<>'Editar') {?>
//       <td bgcolor="#FFFADD"><?php echo $Id ?></td>
//       <td><img src="<?php echo $Imagen; ?>" alt="" width="70" height="70" /><br /></td>
//       <td bgcolor="#FFFADD"><?php echo $Codigo ?></td>
//       <td bgcolor="#FFFADD"><?php echo $Nombre ?></td>
//       <td bgcolor="#FFFADD"><?php echo $Desc ?></td>
//       <!-- <td bgcolor="#FFFADD"><?php echo $PrecioC ?></td> -->
//       <td bgcolor="#FFFADD"><?php echo $PrecioV ?></td>
//       <td bgcolor="#FFFADD"><?php echo $Stock ?></td>
//       <td bgcolor="#FFFADD"><?php echo $Fecha ?></td>
//       <td bgcolor="#FFFADD"><?php echo $Categoria ?></td>
//       <td bgcolor="#FFFADD">
//       <form action="carrito.php" method="post" name="compra">
//         <input name="id_txt" type="hidden" value="<?php echo $Id ?>" />
//         <input name="nombre" type="hidden" value="<?php echo $Nombre ?>" />
//         <input name="precio" type="hidden" value="<?php echo $PrecioV ?>" />
//         <input name="cantidad" type="hidden" value="1" />
//         <input name="Agregar" type="submit" value="Agregar" />
//       </form>
//       <?php } else {?>


//       <?php }?>
//       </td>
//     </tr>
//     <p>
//       <?php }?