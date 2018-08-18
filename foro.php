<html>

	<head>
		<title>Messages</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>

	<body>
		<div class="container">
			<div class="row h-100 justify-content-center align-items-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-body">
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
			print "User: <b>" . $_SESSION ["Usuario"] . "</b> - Type: <b>" . $_SESSION ["Tipo"]."</b>";
			print "<hr>";
			$sql = "select * from mensajes";
			$total = $conexion -> prepare ( $sql );
			$total->execute();
			$contador =  $total -> rowCount();
			print "<div class='alert alert-info'>There are <b>" . $contador . "</b> message/s</div>";
			$total=$conexion->query($sql);
			while ( $row =  $total -> fetch() ) {
				print "<b>ID</b> " . $row ["idmensaje"] . " - <b>User</b> " . $row ["usuario"] . " - <b>Date</b> " . $row ["fechahora"] . " - <b>Message</b> " . $row ["mensaje"] . "</br>";
				if ($_SESSION ["Tipo"]=='Admin'){	
					print "<br><form action='eliminar.php' method='POST'><input type='hidden' name='hiddenid' value='" . $row ["idmensaje"] . "'><input type='submit' class='btn btn-danger' value='Delete'></form>";
					print "<form action='editar.php' method='POST'><input type='hidden' name='hiddenid' value='" . $row ["idmensaje"] . "'><input type='submit' class='btn btn-default' value='Edit'></form><br>";
				}
			}
			print "<hr><h2>Options</h2>";
			if ($_SESSION ["Tipo"]=='Admin'){
				print "<a class='btn btn-default' href='crear.php' role='button'>Create new user</a><br />";
			}
			if ($_SESSION ["Tipo"]=='Admin' || $_SESSION ["Tipo"]=='user'){
				print "<a class='btn btn-default' href='mensaje.php' role='button'>Add message</a><br />";
			}
			$conexion=null;
		?>
								<a class="btn btn-default" href="index.php" role="button">
									Enter as another user</a>
								<br />
								<br />
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>