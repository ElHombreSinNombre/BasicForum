<html>

	<head>
		<title>Edit user</title>
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
			print "User: <b>" . $_SESSION ["Usuario"] . "</b> - Type: <b>" . $_SESSION ["Tipo"]."</b>";
			print "<hr>";
			if (isset($_POST ["editar"])){
			if ($_POST ["editar"]!="" ){ {
				$editar = $_POST ["editar"];
				$conexion = new PDO("mysql:host=localhost", "root", "");
				$conexion->query('use foro');
				$sql = "UPDATE mensajes set mensaje='".$editar."' where idmensaje='".$_SESSION['idMensaje']."'";
				$conexion->query($sql);
				$conexion=null;
				print "<div class='alert alert-success'><b>Success:</b> The message was edited</div>";
				print "<a class='btn btn-default'<a href='mensaje.php' role='button'>Create another user</a>";
				print "<br/>";
				print "<a class='btn btn-default' href='index.php' role='button'>Enter as another user</a>";
				print "<br/>";
				print "<a class='btn btn-default' a href='foro.php'>Return to list</a>";
			}
				}else{
					print "<div class='alert alert-danger'><b>Error:</b> The message is required</a></div>";
					print "<a class='btn btn-default' href='editar.php' role='button'>Retry</a>";
					print "<br/>";
					print "<a class='btn btn-default' href='`index.php' role='button'>Enter as another user</a>";
					print "<br/>";
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