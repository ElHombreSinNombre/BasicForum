<html>
	<head>
		<Title>Eliminar</Title>
		<link rel="StyleSheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
<body>
	<div class="col-md-4 col-md-offset-4">		
		<?php
			$eliminar = $_POST['hiddenid'];
			session_start ();
			print "Usuario: <b>" . ($_SESSION ["Usuario"]) . "</b> - Tipo: <b>" . ($_SESSION ["Tipo"]) . "</b>.";
			print "<hr>";
			$conexion = new mysqli("localhost", "root", "");
			$conexion->select_db('foro');
			$sql = "DELETE from mensajes where idMensaje=".$eliminar; 
			$conexion -> query ($sql);
			$conexion->close();
			print "<div class='alert alert-success'><b>Correcto:</b> Operación realizada satisfactoriamente</div>";
			print "<br/><br/>";
			print "<a class='btn btn-default' href='index.php' role='button'>Entrar con otro usuario</a> <a class='btn btn-default' href='foro.php'>Volver al foro</a>";		
		?>
	</div>
</body>
</html>