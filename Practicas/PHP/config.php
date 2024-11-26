<?php

    mysqli_report(MYSQLI_REPORT_OFF);   

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $baseDeDatos = "Programacion_Web_Uriel_php_Nuevo";

	$conexion = mysqli_connect($servidor,$usuario,$password,$baseDeDatos);
    
    if (!$conexion) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

?>