<html>
	<head>
		<title>Registro</title>
		<link rel="StyleSheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>
	   <div class="col-md-4 col-md-offset-4">   	
		<?php
			session_start ();
			print "Usuario: <b>" . $_SESSION ["Usuario"] . "</b> - Tipo: " . $_SESSION ["Tipo"]. "</b>";
			print "<hr>";
			if (isset ( $_POST ["boton"] )) {
			if ($_POST ["mensajenuevo"]!="" ){ {
				$usuario = $_SESSION ["Usuario"];
				$mensaje = $_POST ["mensajenuevo"];	
				$conexion = new mysqli("localhost", "root", "");
				$conexion->select_db('foro');
				$sql = "INSERT INTO mensajes (usuario, fechahora, mensaje) values ('$usuario',now(),'$mensaje');";
				$conexion->query($sql);
				//$conexion=null;
				$conexion->close();
				print "<div class='alert alert-success'><b>Correcto:</b> Operaci�n realizada satisfactoriamente</div>";
				print "<br/><br/>";
				print "<a class='btn btn-default'<a href='mensaje.php' role='button'>Volver a insertar otro usuario nuevo</a>";
				print "<br/><br/>";
				print "<a class='btn btn-default' href='index.php' role='button'>Entrar con otro usuario</a>";
				print "<br/><br/>";
				print "<a class='btn btn-default' a href='foro.php'>Volver al foro</a>";
				} 
					}else{
						print "<a class='alert alert-danger'><b>Error:</b> Necesita tener algo escrito en el mensaje para poder insertarlo</a>";
						print "<br/><br/>";
						print "<a class='btn btn-default' href='mensaje.php' role='button'>Volver a insertar otro mensaje nuevo</a>";
						print "<br/><br/>";
						print "<a class='btn btn-default' href='index.php' role='button'>Entrar con otro usuario</a>";
						print "<br/><br/>";
						print "<a class='btn btn-default' href='foro.php' role='button'>Volver al foro</a>";
					}
			}
		?>
		</div>
	</body>
</html>

