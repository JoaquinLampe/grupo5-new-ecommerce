<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/styleUnico.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">

  <title>Login</title>
</head>

<body class="cuerpo-perfil">

  <?php include_once ("RB_header.html") ?>

  <main>
    <div class="titulo-login">
      <h2>
        Log In
      </h2>
    </div>
    <div class="login">

      <form class="form-login"action="" method="POST">
        <ul class="items-login">
          <li>
            <label for="email">Email</label>
            <div class="email">
              <input type="email" name="email" id="email" class="form-control" placeholder="Escribi tu Email" required>
            </div>
          </li>
          <li>
            <div class="campo">
              <label for="contraseña">Contraseña</label>
              <div>
                <input type="password" name="password" id="password" class="form-control" placeholder="Escribi tu Contraseña" required>
              </div>
            </div>
          </li>
        </ul>
        <div class="recordar-olvidar">
          <div class="custom-control custom-checkbox terminos">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Recordarme</label>
          </div>
          <div>
            <a class="olvide" href="">Olvidé mi Contraseña</a>
          </div>
        </div>
        <div>
          <div class="botones-login">
            <button id="boton-login" type="submit" name="button" class="btn btn-primary boton-registrarme">
              Log In
            </button>

          </div>
        </div>
      </form>
      <div class="divider">

      </div>
      <div class="foto-login">
        <img src="img/registro.png" alt="">
      </div>


  </main>

  <?php include_once ("RB_footer.html") ?>

</body>

</html>
