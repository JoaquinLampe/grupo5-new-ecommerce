<?php

require_once("funciones.php");

$nombreDefault = "";
$apellidoDefault = "";
$emailDefault = "";
$diaDefault = "";
$mesDefault = "";
$añoDefault = "";

$errores = "";

if($_POST){
   $errores = validadRegistracion($_POST);


// sino hay errores
   if (empty($errores)) { //tb if (count($errores)==0)//

    $usuario = armarUsuario($_POST); // aca estamos armando el usuario//
// todas las transformaciones que se necesitan para que quede lista,
// se producen en armarUsuario();//


    registrar($usuario); // aca estamos guardando nuevo usuario//

    header("location:login.php");exit; // aca se redirige a la pagina de exito//
   }

  


  $nombreDefault = $_POST["nombre"];
  $apellidoDefault = $_POST["apellido"];
  $emailDefault = $_POST["email"];
  $diaDefault = $_POST["dia"];
  $mesDefault = $_POST["mes"];
  $añoDefault = $_POST["año"];
}






?>





<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleUnico.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">

    <title>Registro</title>
</head>

<body class="cuerpo-registro">

    <?php include_once ("header.html") ?>

    <main>
        <div class="registro">
            <div class="titulo-registro">
                <h2>
                    Registro
                </h2>
            </div>
            <form action="registro.php" method="POST">
                <ul class="items-registro">
                    <li class="nombre-apellido">
                        <div class="campo-registro">
                            <label for="nombre">Nombre</label>
                            <div>
                                <input type="text" name="nombre" id="nombre" class="form-control"
                                    placeholder="Ingresá tu nombre" value="<?=$nombreDefault?>">
                            </div>
                            <?php if ($errores) {echo $errores["nombre"];}?>

                        </div>
                        <div class="campo-registro">
                            <label for="apellido">Apellido</label>
                            <div>
                                <input type="text" name="apellido" id="apellido" class="form-control"
                                    placeholder="Ingresá tu apellido" value="<?=$apellidoDefault?>">
                            </div>
                            <?php if ($errores) {echo $errores["apellido"];}?>
                        </div>
                    </li>
                    <li class="genero-pais">
                        <div class="campo-registro">
                            <label for="genero">Género</label>
                            <div>
                                <select name="gender" class="form-control">
                                    <?php if ($_POST && $_POST["gender"] != "") : ?>
                                      <option disabled="disabled">Género</option>
                                    <?php else: ?>
                                      <option disabled="disabled" selected="selected">Género</option>
                                    <?php endif; ?>

                                    <?php if ($_POST && $_POST["gender"] == "Hombre") : ?>
                                      <option value="H" selected>Hombre</option>
                                    <?php else: ?>
                                      <option value="H">Hombre</option>
                                    <?php endif; ?>

                                    <?php if ($_POST && $_POST["gender"] == "Mujer") : ?>
                                      <option value="M" selected>Mujer</option>
                                    <?php else: ?>
                                      <option value="M">Mujer</option>
                                    <?php endif; ?>

                                    <?php if ($_POST && $_POST["gender"] == "Otro") : ?>
                                      <option value="O" selected>Otro</option>
                                    <?php else: ?>
                                      <option value="O">Otro</option>
                                    <?php endif; ?>

                                </select>
                            </div>
                        </div>
                        <div class="campo-registro">
                            <label for="pais">País</label>
                            <div>
                                <input type="text" name="pais" id="pais" class="form-control"
                                    placeholder="De donde sos?">
                            </div>
                            <?php if ($errores) {echo $errores["pais"];}?>
                        </div>
                    </li>
                    <li>
                        <div>
                            <label class="date" for="fecha-nacimiento">Fecha de nacimiento</label>
                            <div class="fecha-nac">
                                <div class="dia">
                                    <input type="text" id="dia" class="form-control" name="dia" value="<?=$diaDefault?>" title="Día"
                                        placeholder="DD" maxlength="2" inputmode="numeric">
                                </div> 
                                <div class="mes">
                                    <input type="text" id="mes" class="form-control" name="mes" value="<?=$mesDefault?>" title="Mes"
                                        placeholder="MM" maxlength="2" inputmode="numeric">
                                </div>
                                <div class="año">
                                    <input type="text" id="año" class="form-control" name="año" value="<?=$añoDefault?>" title="Año"
                                        placeholder="AAAA" maxlength="4" inputmode="numeric">
                                </div>                     
                                </div>
                                <div class="erroresNac">
                                    <?php if ($errores) {echo $errores["dia"];}?>
                                    <?php if ($errores) {echo $errores["mes"];}?>
                                    <?php if ($errores) {echo $errores["año"];}?>
                                </div>
                        </div>
                    </li>
                    <li class="email-confirmar">
                        <div class="campo-registro">
                            <label for="email">Email</label>
                            <div class="email">
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Escribi tu Email" value="<?=$emailDefault?>">
                            </div>
                            <?php if ($errores) {echo $errores["email"];}?>
                        </div>
                        <div class="campo-registro">
                            <label for="email-confirm">Confirmá tu email</label>
                            <div class="email-confirm">
                                <input type="email" name="email-confirm" id="email-confirm" class="form-control"
                                    placeholder="Confirma tu Email">
                            </div>
                            <?php if ($errores) {echo $errores["email-confirm"];}?>
                        </div>
                    </li>
                    <li class="pass-confirmar">
                        <div class="campo-registro">
                            <label for="contraseña">Contraseña</label>
                            <div>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Escribi tu Contraseña">
                            </div>
                            <?php if ($errores) {echo $errores["password"];}?>
                        </div>
                        <div class="campo-registro">
                            <label for="contraseña-confirm">Confirmá tu contraseña</label>
                            <div>
                                <input type="password" name="password-confirm" id="password-confirm"
                                    class="form-control" placeholder="Confirma tu Contraseña">
                            </div>
                            <?php if ($errores) {echo $errores["password-confirm"];}?>
                        </div>
                    </li>
                    <li>
                      <div class="form-group boton-foto-perfil">
                        <label for="exampleFormControlFile1">Subí tu foto de perfil</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                    </li>
                </ul>
                <div class="custom-control custom-checkbox terminos">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Acepto los términos y
                        condiciones</label>
                </div>


                <div class="botones-registro">
                    <button id="boton-registrarme" type="submit" name="button"
                        class="btn btn-primary boton-registrarme">
                        Registrarme
                    </button>
                    <button id="boton-cancelar" type="reset" name="button" class="btn btn-secondary boton-cancelar">
                        Cancelar
                    </button>
                </div>

            </form>

        </div>



    </main>
    <?php include_once ("footer.html") ?>

</body>

</html>
