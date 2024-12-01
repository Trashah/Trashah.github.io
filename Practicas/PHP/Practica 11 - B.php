<?php

require "config.php";
$conexion = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);

$nombre = $_POST["nombre"];
$carrera = $_POST["carrera"];
$escuela = $_POST["escuela"];

$consulta = "INSERT INTO alumnos (nombre, carrera, escuela) VALUES ('$nombre', '$carrera', '$escuela')";

if (!$resultado = mysqli_query($conexion, $consulta)) {
	die ("El registro no se ha podido guardar 
	<br> <br> 
	Error: " . mysqli_error($conexion));
}

echo "¡Registro guardado con éxito!";

?>