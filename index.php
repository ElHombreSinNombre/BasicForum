<html>
<head>
	<title>Registro</title>
	<link rel="StyleSheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>	
	<div class="col-md-4 col-md-offset-4">
		<?php
			session_start ();
			if (! isset ( $_SESSION ["Usuario"] )) {
				$_SESSION ["Usuario"] = "Invitado";
			}
			if (! isset ( $_SESSION ["Tipo"] )) {
				$_SESSION ["Tipo"] = "Invitado";
			}
			if(isset($_GET["salir"])){
				session_destroy();
				header("Location:index.php");
			}
			print "Usuario: <b>" . $_SESSION ["Usuario"] . "</b> - Tipo: <b>" . $_SESSION ["Tipo"]."</b>";
			if ($_SESSION ["Usuario"] != "Invitado") {
				print "<hr><a href='index.php?salir=true'>Entrar como invitado</a>";
			}
		?>
		<hr>
		<form name="form" method="post" action="foro.php">
				<div class="form-group">
			    	<label for="nombre">Nombre</label>
			    	<input type="text" class="form-control" placeholder="Introduce tu nombre Nombre" name="nombre">
			  	</div>
			  	<div class="form-group">
			    	<label for="Clave">Clave</label>
			    	<input type="password" class="form-control" placeholder="Introduce tu clave" name="clave">
				</div>
				<input type="submit" value="Entrar" class="btn btn-default">
		</form>
	</div>
</body>
</html>

