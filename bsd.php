<!DOCTYPE>
<html>

	<head>
		<title>Inicio</title>
	</head>
	<style>
		.progress a {
			position: absolute;
			display: block;
			width: 100%;
			color: white;
			text-shadow: -1px -1px 0 #000,
			1px -1px 0 #000,
			-1px 1px 0 #000,
			1px 1px 0 #000;
		}
	</style>

	<body>
		<div class="progress progress-striped active">
			<div id="loadbar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
				<a>Loading</a>
			</div>
		</div>
		<?php
		$crearBsd="Create database foro;";
		$crearTablaMensajes="Create Table if not exists mensajes (idmensaje int auto_increment, usuario varchar(30) not null, fechahora datetime not null, mensaje varchar(30) not null, primary key (idmensaje));";
		$crearMensaje1="Insert into mensajes (usuario, fechahora, mensaje) values ('Asier', now(), 'Like')";
		$crearMensaje2="Insert into mensajes (usuario, fechahora, mensaje) values ('Lara', now(), 'ForeverAndEver');";
		$crearTablaUsuario="Create Table if not exists usuarios (usuario varchar(30) not null, clave varchar(255) not null, tipo varchar(8) not null, primary key (usuario));";
		$hash=password_hash('Prueba',PASSWORD_DEFAULT);
		$crearUsuario1="Insert into usuarios (usuario, clave, tipo) values ('Admin','$hash','Admin');";
		$crearUsuario2="Insert into usuarios (usuario, clave, tipo) values ('User','$hash','User');";

		$conexion = new PDO("mysql:host=localhost", "root", "");

		$conexion->query($crearBsd);

		$conexion->query('use foro');

		$conexion->query($crearTablaMensajes);
		$conexion->query($crearTablaUsuario);

		$conexion->query($crearMensaje1);
		$conexion->query($crearMensaje2);
		$conexion->query($crearUsuario1);
		$conexion->query($crearUsuario2);
		?>
	</body>
	<script>
		var contador = 0;
		setInterval(function () {
			contador++;
			document.getElementById('loadbar').style.width = contador + '%';
			if (contador == 150) {
				window.location.href = 'index.php';
			}
		}, 40);
	</script>

</html>