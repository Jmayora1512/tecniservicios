<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
   <?php 
      include "includes/estilo.php";
   ?> 		
</head>
<body data-tablet-width="940" data-mobile-width="580">
   <?php 
     /* include "includes/header.php";*/
      include "includes/nav.php";
     /* include "includes/slider.php";*/
   ?>
	<div class="container">

		<div class="row-fluid">
			<div class="span7">
				<div class="page-header">
					<h1>Contactame</h1>
					<small>Tu opinion es valiosa para nosotros</small>
				</div>
				<form action="#" name="contactame" class="form-horizontal">
					<div class="control-group">
						<label for="nombre" class="control-label">Nombre</label>
						<div class="controls">
							<input type="text" name="nombre">
						</div>
					</div>
					<div class="control-group">
						<label for="apellido" class="control-label">Apellido</label>
						<div class="controls">
							<input type="text" name="apellido">
						</div>
					</div>
					<div class="control-group">
						<label for="correo" class="control-label">E-mail</label>
							<div class="controls">
								<input type="email" name="correo" placeholder="example@gmail.com">							
							</div>
						</div>
					<div class="control-group">
						<label for="mensaje" class="control-label">Mensaje</label>
							<div class="controls">
								<textarea name="mensaje"></textarea>
							</div>
						</div>
					<div class="form-actions">
						<button type="submit" class"=btn btn-primary">Enviar</button>
						<button type="button" class="btn">Cancelar</button>
					</div>												
				</form>
			</div>
<!-- 			<div class="span5">
				<div class="page-header">
					<h1>Redes Sociales</h1>
					<small>Siguenos , recominedanos, etc</small>
				</div>
				<p>
					<a href="http://www.facebook.com/yavallejo" target="_blank">
						<img src="/bootstrap/curso/img/Facebook.jpg" alt="Facebook" title="Agregame al facebook">
					</a>				
				</p>
				<p>
					<a href="http://www.twitter.com/yavallejo" target="_blank">
						<img src="/bootstrap/curso/img/Twitter.jpg" alt="Twitter" title="Agregame al Twitter">
					</a>
				</p>				
			</div>
		</div> -->
		
		<footer>
			<address>
				<strong>Tecni Servicios E.E.C.C</strong><br>
				<abbr title="Telefono">Tel:</abbr> 04129785018
				<i class="icon-user icon-white"></i> Correo jorgemayora@hotmail.com
			</address>
		</footer>
	</div>
	<script type="text/javascript" src="/bootstrap/curso/js/jquery.js"></script>
	<script type="text/javascript" src="/bootstrap/curso/js/bootstrap.js"></script>

</body>
</html>
