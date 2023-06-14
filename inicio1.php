<?php

$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "sebas15";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $contraseña= $_POST["contraseña"];

   
      $sql = "SELECT id FROM 2628 WHERE ususario = '$usuario'";
      $result = $conn->query($sql);
      $sql = "SELECT id FROM 2628 WHERE contraseña = '$contraseña'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          echo "El nombre de usuario ya está registrado. Por favor, elige otro nombre de usuario.";
      } else {
         
          $sql = "INSERT INTO usuario (nombre, usuario, contraseña) VALUES ('$nombre', '$usuario', '$contraseña')";
          if ($conn->query($sql) === TRUE) {
         
              header("Location: inicio.php");
              exit();
          } else {
              echo "Error al registrar el usuario: " . $conn->error;
          }
      }
  }
  
  $conn->close();
  ?>