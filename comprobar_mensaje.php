<html>

	<head>
		<title>Registro</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>

	<body>
		<div class="container">
			<div class="row h-100 justify-content-center align-items-center">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<?php
			session_start ();
			print "Usuario: <b>" . $_SESSION ["Usuario"] . "</b> - Tipo: " . $_SESSION ["Tipo"]. "</b>";
			print "<hr>";
			if (isset ( $_POST ["boton"] )) {
			if ($_POST ["mensajenuevo"]!="" ){ {
				$usuario = $_SESSION ["Usuario"];
				$mensaje = $_POST ["mensajenuevo"];	
				$conexion = new PDO("mysql:host=localhost", "root", "");
				$conexion->query('use foro');
				$sql = "INSERT INTO mensajes (usuario, fechahora, mensaje) values ('$usuario',now(),'$mensaje');";
				$conexion->query($sql);
				$conexion=null;
				print "<div class='alert alert-success'><b>Success:</b> The message wad added in " . date ( "d/m/Y H:i:s" ) . "		<br/></div>";
				print "<br/><br/>";
				print "<a class='btn btn-default'<a href='mensaje.php' role='button'>Add other message</a>";
				print "<br/><br/>";
				print "<a class='btn btn-default' href='index.php' role='button'>Enter as another user<</a>";
				print "<br/><br/>";
				print "<a class='btn btn-default' a href='foro.php'>Return to list</a>";
				} 
					}else{
						print "<a class='alert alert-danger'><b>Error:</b> The message is required</a>";
						print "<br/><br/>";
						print "<a class='btn btn-default' href='mensaje.php' role='button'>Add other message</a>";
						print "<br/><br/>";
						print "<a class='btn btn-default' href='index.php' role='button'>Enter as another user<</a>";
						print "<br/><br/>";
						print "<a class='btn btn-default' href='foro.php' role='button'>Return to list</a>";
					}
			}
		?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>