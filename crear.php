<html>

  <head>
    <title>New user</title>
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
    ?>
                <form name="form" method="post" action="comprobar_crear.php">
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
                  <div class="radio">
                    <label>
                      <input type="radio" name="opciones" value="Admin">
                      <b>Admin</b>
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="opciones" value="user">
                      <b>User</b>
                    </label>
                  </div>
                  <input type="submit" value="Create" name="boton" class="btn btn-primary">
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/ionicons@4.2.0/dist/ionicons.js"></script>
  </body>

</html>