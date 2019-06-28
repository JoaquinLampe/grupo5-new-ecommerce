<?php

function validadRegistracion($datos){
    $errores = [];

    return $errores;
}

function armarUsuario($datos){
    return [
        "id" => proximoID(),
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
  }

  $ultimoUsuario = end($usuarios);

  return $ultimoUsuario["id"] + 1;
}

function traerTodosLosUsuarios() {
  $archivo = file_get_contents("usuarios.json");

  if ($archivo == "") {
    return [];
  }

  $usuarios = json_decode($archivo, true);

  return $usuarios;
}

function registrar($usuario) {
  $usuarios = traerTodosLosUsuarios();

  $usuarios[] = $usuario;

  $usuariosJSON = json_encode($usuarios);

  file_put_contents("usuarios.json", $usuariosJSON);
}




?>