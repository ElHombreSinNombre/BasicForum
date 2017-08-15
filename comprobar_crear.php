<html>
	<head>
		<title>Registro</title>
		<link rel="StyleSheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
<body>
 	<div class="col-md-4 col-md-offset-4">   		
		<?php
		session_start ();
		print "Usuario: <b>" . $_SESSION ["Usuario"] . "</b> - Tipo: <b>" . $_SESSION ["Tipo"] .  "</b>";
		print "<hr>";
		if (isset ( $_POST ["boton"]) ) {
			if ($_POST ["usuario"]!="" && $_POST["clave"]!="" && isset($_POST["opciones"]) ){ 
				$usuarionuevo=$_POST ["usuario"];
				$clavenuevo=password_hash($_POST["clave"],PASSWORD_DEFAULT);
				$tipo=$_POST["opciones"];
				$conexion = new PDO("mysql:host=localhost", "root", "");
				$conexion->query('use foro');
				$sql = "INSERT INTO usuarios (usuario, clave, tipo) values ('$usuarionuevo','$clavenuevo','$tipo');";
				$conexion->query($sql);
				$conexion=null;
				print "<div class='alert alert-success'><b>Correcto:</b> Operación realizada satisfactoriamente sobre la tabla de usuarios con fecha/hora " . date ( "d/m/Y H:i:s" ) . "<br/></div>";
				print "<br/><br/>";
				print "<div class='btn btn-default'<a href='crear.php' role='button'>Volver a insertar otro usuario nuevo</a></div>";
				print "<br/><br/>";
				print "<a class='btn btn-default' href='index.php' role='button'>Entrar con otro usuario</a>";
				print "<br/><br/>";
				print "<a class='btn btn-default' a href='foro.php'>Volver al foro</a>";
				}else{
					print "<a class='alert alert-danger'><b>Error:</b> Necesita tener algo escrito en el mensaje para poder insertarlo</a></div>";
					print "<br/><br/>";
					print "<div class='btn btn-default' href='mensaje.php' role='button'>Volver a insertar otro mensaje nuevo</a></div>";
					print "<br/><br/>";
					print "<a class='btn btn-default' href='index.php' role='button'>Cambiar de usuario (Volver al inicio de sesion)</a><br/>";
					print "<br/><br/>";
					print "<a class='btn btn-default' href='foro.php' role='button'>Volver al foro</a>";
				}
		}
		?>
	</div>	
</body>
</html>

