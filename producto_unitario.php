<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Obstgarten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleUnico.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">

  </head>
  <body>

<?php include_once ("funciones.php")
if ($_POST) {
  $errores = validarLogin($_POST);

  if (count($errores) == 0) {
    loguearUsuario($_POST["email"]);

    header("location:login.php");exit;

    // code...
  }}
  // code...
}

 ?>



<br>


<br>
<br>

    <?php include_once ("footer.html") ?>
  </body>
</html>
