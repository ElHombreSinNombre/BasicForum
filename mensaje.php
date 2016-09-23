<html>
<head>
	<title>Registro</title>
	<link rel="StyleSheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
</head>
<body>
	<div class="col-md-4 col-md-offset-4">	
	<?php
		session_start ();
		print "Usuario: <b>" . $_SESSION ["Usuario"] . "</b> - Tipo: <b>" . $_SESSION ["Tipo"]."</b>";
		print "<hr>";
	?>
	<form name="form" method="post" action="comprobar_mensaje.php">
		<div class="form-group">
		   	<label for="mensajenuevo">Mensaje</label>
			<textarea class="form-control"  name="mensajenuevo" rows="15" cols="40"></textarea>
		 </div>
		<input type="submit" class="btn btn-default" value="Añadir" name="boton"><br />
	</form>
	<a class="btn btn-default" href="index.php" role="button">Entrar con otro usuario</a><br /> <br /> <a class="btn btn-default" href="foro.php" role="button">Volver al foro</a>
	</div>
</body>
</html>


