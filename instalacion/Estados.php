<?php 
include("C:/xampp/htdocs/tecniservicios/configs/conexion.php");

mysql_select_db('inventario',$conexion)or die("no se pudo seleccionar la base de datos ".mysql_error());

$sql="
INSERT INTO `estados` (`idEstados`, `Nombre_Estado`) VALUES
(1, 'Amazonas'),
(2, 'Anzo�tegui'),
(3, 'Apure'),
(4, 'Aragua'),
(5, 'Barinas'),
(6, 'Bol�var'),
(7, 'Carabobo'),
(8, 'Cojedes'),
(9, 'Delta Amacuro'),
(10, 'Distrito Capital'),
(11, 'Falc�n'),
(12, 'Gu�rico'),
(13, 'Lara'),
(14, 'M�rida'),
(15, 'Miranda'),
(16, 'Monagas'),
(17, 'Nueva Esparta'),
(18, 'Portuguesa'),
(19, 'Sucre'),
(20, 'T�chira'),
(21, 'Trujillo'),
(22, 'Vargas'),
(23, 'Yaracuy'),
(24, 'Zulia');
";


?>