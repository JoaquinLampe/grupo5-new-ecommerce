<?php
session_start();

function validadRegistracion($datos){
  $birthday = $datos["dia"]."-".$datos["mes"]."-".$datos["año"];
  $errores = [];

  if (strlen($datos["nombre"]) < 5) {
    $errores["nombre"] = "El nombre debe tener 5 caracteres minimo";
  }

  if (strlen($datos["apellido"]) == 0) {
    $errores["apellido"] = "Por favor, completa tu apellido";
  }

  // no me valida el pais
  if (strlen($datos["pais"]) == 0) {
    $errores["pais"] = "Por favor, completa tu pais";
  }

  // falta validar el Genero

  if (strlen($datos["dia"]) == 0) {
    $errores["dia"] = "Campo obligatorio";
  }

  if ($datos["mes"] == "") {
    $errores["mes"] = "Campo obligatorio";
  }

  if ($datos["año"] == "") {
    $errores["año"] = "Campo obligatorio";
  }
  else if (validateAge($birthday) == false) {
    $errores["año"] = "Debes ser mayor de edad";
  }

  if ($datos["email"] == "") {
    $errores["email"] = "Por favor, completa tu email";
  }
  else if (filter_var($datos["email"], FILTER_VALIDATE_EMAIL) == false) {
    $errores["email"] = "El email provisto no es correcto";
  }
  else if (existeElEmail($datos["email"])) {
    $errores["email"] = "Ese email ya exite";
  }
  if ($datos["email"] != "" && $datos["email-confirm"] != "" && $datos["email"] != $datos["email-confirm"]) {
    $errores["email"] = "Los emails no coinciden";
  }

  if ($datos["email-confirm"] == "") {
    $errores["email-confirm"] = "Por favor, confirma tu email";
  }
  else if (filter_var($datos["email-confirm"], FILTER_VALIDATE_EMAIL) == false) {
    $errores["email-confirm"] = "El email provisto no es correcto";
  }

  if ($datos["password"] == "") {
    $errores["password"] = "Por favor, completa tu contraseña";
  }

  if ($datos["password-confirm"] == "") {
    $errores["password-confirm"] = "Por favor, confirma tu contraseña";
  }

  if ($datos["password"] != "" && $datos["password-confirm"] != "" && $datos["password"] != $datos["password-confirm"]) {
    $errores["password"] = "Las contraseñas no coinciden";
  }

    return $errores;
}



function validateAge($birthday, $age = 18){
    // $birthday can be UNIX_TIMESTAMP or just a string-date.
    if(is_string($birthday)) {
        $birthday = strtotime($birthday);
    }

    // check
    // 31536000 is the number of seconds in a 365 days year.
    if(time() - $birthday < $age * 31536000)  {
        return false;
    }

    return true;
}

function validarLogin($datos) {
  $errores = [];

  if (!existeElEmail($datos["email"])) {
    $errores["email"] = "Los datos son incorrectos" ;
  } else {
    $usuario = traerUsuarioPorEmail($datos["email"]);

if (password_verify($datos["password"], $usuario["password"]) == false) {
  $errores["email"] = "Los datos son incorrectos por contrasenia";
  // code...
}}

return $errores;
}

function existeElEmail($email) {
  $usuario = traerUsuarioPorEmail($email);

  if ($usuario == null) {
return false;
} else {
  return true;
}
  }

function traerUsuarioPorEmail($email){
$usuarios = traerTodosLosUsuarios();

foreach($usuarios as $usuario) {
  if ($usuario["email"] == $email) {
    return $usuario;
    // code...
  }
} return null; // fijarse de ponerlo siempre fuera del foreach

}


function loguear($email) {
$_SESSION["usuariologueado"] = $email;
}

function armarUsuario($datos){
    return [
        "id" => proximoID(), // hay que armarla
        "nombre" => ucfirst($datos["nombre"]),
        "apellido" => ucfirst($datos["apellido"]),
        "gender" => $datos["gender"],
        "pais" => $datos["pais"],
        "fecha-nacimiento" => [$datos["dia"]."-".$datos["mes"]."-".$datos["año"]],
        "email" => $datos["email"],
        "password" => password_hash($datos["password"], PASSWORD_DEFAULT),
    ];
}

function proximoId() {
  $usuarios = traerTodosLosUsuarios();

  if (empty($usuarios)) {
    return 1;
  } // sino hay usuarios, empieza a contar en uno.

  $ultimoUsuario = end($usuarios); // trae el ultimo usuario
  // del array

  return $ultimoUsuario["id"] + 1;
  // del ultimo usuario trae el id y le suma uno
}

function traerTodosLosUsuarios() {
  $archivo = file_get_contents("usuarios.json");

  if ($archivo == "") {
    return [];
  }

  $usuarios = json_decode($archivo, true);

  return $usuarios;
}

function registrar($nuevousuario) { // tambien llamada guardar($usuario)
  $usuarios = traerTodosLosUsuarios();

  $usuarios[] = $nuevousuario; //  le agregamos al array decodificado un nuevo usuario

  $usuariosJSON = json_encode($usuarios);

  file_put_contents("usuarios.json", $usuariosJSON); // escribir el archivo de json con el nuevo usuario incluido
}

function estaLogueado() {
  if(isset($_SESSION["usuarioLogueado"])) {
    return true;
  } else {
    return false;
  }
}

function traerUsuarioLogueado() {
  if(estaLogueado()) {
    return traerUsuarioPorEmail($_SESSION["usuarioLogueado"]);
  }
  return null;
}

// Traer datos de una BD cuando tengamos que exportar Informacion
// de la BD

function consultaTabla(PDO $db, $nombreTabla)
{
    $query = $db->prepare("SELECT * FROM $nombreTabla");
    $query->execute();
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function listarDatos(PDO $db, $nombreTabla, $id)
{
    $query = $db->prepare("SELECT DATE_FORMAT(release_date, '%d de %M de %Y') 'Fecha de estreno', title Titulo FROM $nombreTabla WHERE id = :id");
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}




?>
