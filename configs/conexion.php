<?php 
$conexion=mysql_connect('localhost','root','') or die('No hay conexión a la base de datos');
$db=mysql_select_db('inventario',$conexion)or die('no existe la base de datos.');

// define('BASE_URL', 'http://localhost:8080/tecniservicios/');

// function base_url($cad){
//   return BASE_URL.$cad
// };

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

<?php 
function EncontrarReg($Id)
{
  $consulta=("select * from productos where idProductos=$Id");
  $res=mysql_query($consulta);
  $filas=mysql_fetch_array($res);
  return $filas;
}
?>

<?php 
function EncontrarRegP($RIF)
{
  $consulta=("select * from proveedores where RIF=$RIF");
  $res=mysql_query($consulta);
  $filas=mysql_fetch_array($res);
  return $filas;
}
?>

<?php 
function EncontrarRegU($Cedula_Usuario)
{
  $consulta=("select * from usuario where Cedula_Usuario=$Cedula_Usuario");
  $res=mysql_query($consulta);
  $filas=mysql_fetch_array($res);
  return $filas;
}
?>

<?php 
function EncontrarRegC($Cedula_Cliente)
{
  $consulta=("select Cedula_Cliente from clientes where Cedula_Cliente=$Cedula_Cliente");
  $res=mysql_query($consulta);
  $filas=mysql_fetch_array($res);
  return $filas;
}
?>

<?php 
function GrabarCambios($Id,$Imagen,$Codigo,$Nombre,$Desc,$Precio_Costo,$Precio_Venta,$Stock,$Fecha_Creado)
{
//Escribo en mi base de datos
 if (isset($Id))
 {
  $cad="UPDATE productos set Imagen='$Imagen',
        Codigo='$Codigo',
        Nombre='$Nombre',
        Descripcion_Productos='$Desc',
        Precio_Costo='$Precio_Costo',
        Precio_Venta='$Precio_Venta',
        Stock='$Stock',
        Fecha_Creado='$Fecha_Creado' where idProductos=$Id";
  mysql_query($cad);
  //echo $cad;
  echo '<p>Registro Actualizado</p>';
 }
}

?>

<?php 
function GrabarCambiosP($RIF,$Nombre,$Apellido,$Comercio,$Direccion,$Fecha,$Telefono,$Celular,$Estados)

{
//Escribo en mi base de datos
 if (isset($RIF))
 {
  $cad="UPDATE proveedores set RIF='$RIF',
        Nombre_Contacto='$Nombre',
        Apellido_Contacto='$Apellido',
        Nombre_Comercial='$Comercio',
        Direccion_Comercio='$Direccion',
        Fecha_Ingreso='$Fecha',
        Telefono='$Telefono',
        Celular_Contacto='$Celular',
        Estados_idEstados='$Estados' where RIF='$RIF'";
  mysql_query($cad);
  //echo $cad;
  echo '<p>Registro Actualizado</p>';
 }
}

?>

<?php 
function GrabarCambiosU($Cedula,$Nombre,$Apellido,$Login,$Clave,$Correo,$Telefono,$Celular,$Fecha,$Direccion,$Nivel_Usuario,$Estados)

{
//Escribo en mi base de datos
 if (isset($Cedula))
 {
  $cad="UPDATE usuario set Nombre_Usuario='$Nombre,',
        Apellido_Usuario='$Apellido',
        Login='$Login',
        Clave='$Clave',
        Correo_Usuario='$Correo',
        Telefono_Usuario='$Telefono',
        Celular_Usuario='$Celular',
        Fecha_Usuario='$Fecha',
        Direccion_Usuario='$Direccion',
        Nivel_Usuario_idNivel_Usuario='$Nivel_Usuario',
        Estados_idEstados='$Estados' where Cedula_Usuario='$Cedula'";
  mysql_query($cad);
  //echo $cad;
  echo '<p>Registro Actualizado</p>';
 }
}
?>

<?php 
function GrabarCambiosC($Cedula,$Nombre,$Apellido,$Correo,$Fecha,$Telefono,$Celular,$Direccion,$Estados)

{
//Escribo en mi base de datos
 if (isset($Cedula))
 {
  $cad="UPDATE clientes set Nombre_Cliente='$Nombre',
        Apellido_Cliente='$Apellido',
        Correo_Cliente='$Correo',
        Fecha_Ingreso='$Fecha',        
        Telefono_Cliente='$Telefono',
        Celular_Cliente='$Celular',
        Direccion_Cliente='$Direccion',
        Estados_idEstados='$Estados' where Cedula_Cliente='$Cedula'";
  mysql_query($cad);
  //echo $cad;
  echo '<p>Registro Actualizado</p>';
 }
}

?>

<?php
function Borrar($Id)
{
  $sql="delete from productos where idProductos=$Id";
  mysql_query($sql);
  echo 'Registro eliminado con exito!';
}
?>

<?php
function BorrarP($RIF)
{
  $sql="delete from proveedores where RIF='$RIF'";
  echo $sql;
  mysql_query($sql);
  echo 'Registro eliminado con exito!';
}
?>

<?php
function BorrarU($Id)
{
  $sql="delete from usuario where Cedula_Usuario=$Id";
  mysql_query($sql);
  echo 'Registro eliminado con exito!';
}
?>

<?php
function BorrarC($Id)
{
  $sql="delete from clientes where Cedula_Cliente=$Id";
  mysql_query($sql);
  echo 'Registro eliminado con exito!';
}
?>