<html>

	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<style>
		ion-icon {
			font-size: 1.5em;
		}

		body {
			overflow: hidden
		}
	</style>
	<body>
		<div class="text-right p-3">
			<ion-icon name="help-circle" size="medium" data-placement="left" data-toggle="popover" title="Credentials" data-content="User: Admin - Password: Prueba"></ion-icon>
		</div>
		<div class="container">
			<div class="row h-100 justify-content-center align-items-center">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<?php
								session_start ();
								if (! isset ( $_SESSION ["Usuario"] )) {
									$_SESSION ["Usuario"] = "Guest";
								}
								if (! isset ( $_SESSION ["Tipo"] )) {
									$_SESSION ["Tipo"] = "Guest";
								}
								if(isset($_GET["salir"])){
									session_destroy();
									header("Location:index.php");
								}
								print "User: <b>" . $_SESSION ["Usuario"] . "</b> - Type: <b>" . $_SESSION ["Tipo"]."</b>";
								if ($_SESSION ["Usuario"] != "Invitado") {
									print "<hr><a href='index.php?salir=true'>Enter as a guest</a>";
								}
							?>
								<hr>
								<form name="form" method="post" action="foro.php">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">
													<ion-icon name="person"></ion-icon>
												</span>
											</div>
											<input type="text" class="form-control" placeholder="Username" name="nombre">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">
													<ion-icon name="key"></ion-icon>
												</span>
											</div>
											<input type="password" class="form-control" placeholder="Password" name="clave">
										</div>
									</div>
									<div class="form-group">
										<input type="submit" value="Enter" class="btn btn-primary">
									</div>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://unpkg.com/ionicons@4.2.0/dist/ionicons.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.js"></script>
		<script>
			$(function () {
				$('[data-toggle="popover"]').popover()
			})
		</script>
	</body>

</html>