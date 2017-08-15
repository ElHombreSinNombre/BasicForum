<html>
	<head>
		<title>Registro</title>
		<link rel="StyleSheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
<body>
	<div class="col-md-4 col-md-offset-4">	
		<?php
			session_start ();
			$conexion = new PDO("mysql:host=localhost", "root", "");
			$conexion->query('use foro');
			if (isset ( $_POST ["nombre"] ) && isset ( $_POST ["clave"] )) {
				$nombre = $_POST ["nombre"];
				$clave = $_POST ["clave"];
				$sql2 = "select * from usuarios";
				$acceso = $conexion -> query ( $sql2 );
				while ( $row =  $acceso -> fetch() ) {
					if ($nombre == $row ["usuario"] && password_verify($clave,$row ["clave"])) {
						$_SESSION ["Usuario"] = $row ["usuario"];
						$_SESSION ["Tipo"] = $row ["tipo"];
						break;
					}
				}
			}
			print "Usuario: <b>" . $_SESSION ["Usuario"] . "</b> - Tipo: <b>" . $_SESSION ["Tipo"]."</b>";
			print "<hr>";
			$sql = "select * from mensajes";
			$total = $conexion -> prepare ( $sql );
			$total->execute();
			$contador =  $total -> rowCount();
			print "<div class='alert alert-info'>Hay <b>" . $contador . "</b> mensaje/s en el foro</div>";
			$total=$conexion->query($sql);
			while ( $row =  $total -> fetch() ) {
				print "<b>ID</b> " . $row ["idmensaje"] . " - <b>Usuario</b> " . $row ["usuario"] . " - <b>Fecha y hora</b> " . $row ["fechahora"] . " - <b>Mensaje</b> " . $row ["mensaje"] . "</br>";
				if ($_SESSION ["Tipo"]=='admin'){	
					print "<br><form action='eliminar.php' method='POST'><input type='hidden' name='hiddenid' value='" . $row ["idmensaje"] . "'><input type='submit' class='btn btn-danger' value='Eliminar'></form>";
					print "<form action='editar.php' method='POST'><input type='hidden' name='hiddenid' value='" . $row ["idmensaje"] . "'><input type='submit' class='btn btn-default' value='Editar'></form><br>";
				}
			}
			print "<hr><h2>Menú de opciones</h2>";
			if ($_SESSION ["Tipo"]=='admin'){
				print "<br/><a class='btn btn-default' href='crear.php' role='button'>Crear nuevo usuario</a><br /> <br />";
			}
			if ($_SESSION ["Tipo"]=='admin' || $_SESSION ["Tipo"]=='user'){
				print "<a class='btn btn-default' href='mensaje.php' role='button'>Insertar mensaje</a><br /> <br />";
			}
			$conexion=null;
		?>
		<a class="btn btn-default" href="index.php" role="button">Entrar con otro usuario</a><br /> <br />
	</div>
</body>
</html>
