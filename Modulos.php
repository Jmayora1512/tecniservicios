<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modulos</title>
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
   <?php 
      include "includes/estilo.php";
   ?> 		
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
						<li class="active"><a href="index.php">Inicio</a></li>
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

	
	<script type="text/javascript" src="/bootstrap/curso/js/jquery.js"></script>
	<script type="text/javascript" src="/bootstrap/curso/js/bootstrap.js"></script>
	<script type="text/javascript" src="/bootstrap/curso/js/bootstrap-dropdown.js"></script>
	<script type="text/javascript">
		$(".dropdown-toggle").dropdown()
	</script>		

</body>
</html>
