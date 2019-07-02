<?php
session_start();

function validadRegistracion($datos){
    $errores = [];

    return $errores;
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




?>
