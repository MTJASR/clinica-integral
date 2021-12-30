<?php 
include '../CONTROLADOR/conexion.php';
if (isset($_POST['registrar'])) {

$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$rol_id = $_POST["rol_id"];
$estado = $_POST["estado"];
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];

$insertar = "INSERT INTO usuarios (nombre,usuario,rol_id,estado,email,contrasena) VALUES ('$nombre','$usuario','$rol_id','$estado','$email','$contrasena')";
mysqli_query($conexion, $insertar);

mysqli_close($conexion);
} ?>