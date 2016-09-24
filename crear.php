<html>
  <head>
    <title>Registro</title>
    <link rel="StyleSheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </head>
<body>
  <div class="col-md-4 col-md-offset-4">    	
    <?php
      session_start ();
      print "Usuario: <b>" . $_SESSION ["Usuario"] . "</b> - Tipo: <b>" . $_SESSION ["Tipo"]."</b>";
      print "<hr>";
    ?>
    <form name="form" method="post" action="comprobar_crear.php">
      <div class="form-group">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" class="form-control" placeholder="Introduce nuevo usuario">
      </div>
      <div class="form-group">
        <label for="clave">Clave</label>
        <input type="text" name="clave" class="form-control" placeholder="Introduce nueva clave">
      </div>
      <div class="radio">
        <label> <input type="radio" name="opciones"  value="admin"><b>Admin</b></label>
      </div>
      <div class="radio">
        <label> <input type="radio" name="opciones"  value="user" ><b>User</b></label>
      </div>
      <input type="submit" value="Enviar" name="boton" class="btn btn-primary">
    </form>
  </div>
</body>
</html>
