<html>

	<head>
		<Title>Delete</Title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>

	<body>
		<div class="container">
			<div class="row h-100 justify-content-center align-items-center">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<?php
			$eliminar = $_POST['hiddenid'];
			session_start ();
			print "Usuario: <b>" . ($_SESSION ["Usuario"]) . "</b> - Tipo: <b>" . ($_SESSION ["Tipo"]) . "</b>.";
			print "<hr>";
			$conexion = new PDO("mysql:host=localhost", "root", "");
			$conexion->query('use foro');
			$sql = "DELETE from mensajes where idMensaje=".$eliminar; 
			$conexion -> query ($sql);
			$conexion=null;
			print "<div class='alert alert-success'><b>Success:</b> User war deleted</div>";
			print "<a class='btn btn-default' href='index.php' role='button'>Enter as another user</a>";		
			print "<br/>";
			print "<a class='btn btn-default' href='foro.php'>Return</a>";		

		?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>