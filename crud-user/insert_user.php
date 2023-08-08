<?php
include("connection.php");
$con = connection();

$id              = null;
$name            = $_POST["name"];
$surname         = $_POST["surname"];
$email           = $_POST["email"];
$password        = $_POST["password"];
$repeat_password = $_POST["repeat_password"];

$hashedPassword  = password_hash($password, PASSWORD_DEFAULT);


if (empty($name) || empty($surname) || empty($email) || empty($password) || empty($repeat_password)) {
  echo "Todos los campos son obligatorios.";
  exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "El formato del correo no es valido.";
  exit();
}

if ($password !== $repeat_password) {
  echo "Las contraseñas no coinciden.";
  exit();
}

$sqlCheckEmail = "SELECT * FROM users WHERE email = '$email'";
$resultCheckEmail = mysqli_query($con, $sqlCheckEmail);

if (mysqli_num_rows($resultCheckEmail) > 0) {
  echo "El correo ya esta registrado.";
  exit();
}

$sql = "INSERT INTO users (id, name, surname, email, password) VALUES ('$id', '$name', '$surname', '$email', '$hashedPassword')";
$query = mysqli_query($con, $sql);

if ($query) {
  header("Location: index.php");
  exit();
} else {
  echo "Hubo un error al registrar el usuario.";
}