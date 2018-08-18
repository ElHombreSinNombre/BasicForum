<html>
<head>
	<title>Registro</title>
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
		print "User: <b>" . $_SESSION ["Usuario"] . "</b> - Type: <b>" . $_SESSION ["Tipo"]."</b>";
		print "<hr>";
	?>
	<form name="form" method="post" action="comprobar_mensaje.php">
		<div class="form-group">
		   	<label for="mensajenuevo">Message</label>
			<textarea class="form-control"  name="mensajenuevo" rows="15" cols="40"></textarea>
		 </div>
		<input type="submit" class="btn btn-primary" value="Add" name="boton"><br />
	</form>
	<a class="btn btn-default" href="index.php" role="button">Enter as another user</a><br /> <a class="btn btn-default" href="foro.php" role="button">Return to list</a>
	</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>


