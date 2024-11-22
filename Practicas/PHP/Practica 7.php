<!DOCTYPE html>

<html lang = "es">

	<head>

		<title> Séptima Secuencia </title>
		<meta charset = "UTF-8">

	</head>

	<body>

		<?php
			
			require "config.php";

			echo "<h2>Práctica 7: Creacion de una base de datos</h2>";
			echo "<br> <br>";

			$nombreNuevaBaseDeDatos = "Programacion_Web_Uriel_php_Nuevo";

			$consulta = "CREATE DATABASE $nombreNuevaBaseDeDatos";

			$resultado = mysqli_query($conexion, $consulta);

			if ($resultado) {
				echo "La base de datos $nombreNuevaBaseDeDatos, ha sido creada de forma exitosa";
			}

			else {
				echo "La base de datos $nombreNuevaBaseDeDatos no se ha podido crear.<br>Error: " . mysqli_error($conexion);
			}

			echo "<br> <br>";
			echo "El script utilizado fue: $consulta";

			mysqli_close($conexion);

		?>

	</body>

</html>