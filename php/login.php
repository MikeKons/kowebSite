<?php
session_start();

$usuario = $_POST["email"];
$password = $_POST["password"];
$rememberMe = $_POST["rememberMe"];

if($usuario == 'mike' && $password == '6143'){
    $autenticado = true;
}

if ($autenticado) {
  $_SESSION["usuario"] = $email;

  if ($rememberMe) {
    setcookie("usuario", $usuario, time() + (86400 * 30), "/"); // crea una cookie para recordar la sesión
  }
  
  echo "OK";
} else {
  echo "Error: correo electrónico o contraseña incorrectos";
}
?>
