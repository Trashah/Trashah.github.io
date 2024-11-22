<!DOCTYPE html>

<html lang = "es">

	<head>

		<title> Séptima Secuencia</title>
		<meta charset = "UTF-8">

	</head>

	<body>

		<?php
			
			require ("config.php");

			echo "<h2>Práctica 7: Creacion de una base de datos</h2>";
			echo "<br> <br>";

			$conexion = mysqli_connect($servidor,$usuario,$password,$baseDeDatos);

			$nombreNuevaBaseDeDatos = "Programacion_Web_Uriel_php_Nuevo";

			$consulta = "CREATE DATABASE $nombreNuevaBaseDeDatos";

			if ($resultado = mysqli_query($conexion,$consulta)) {
				echo "La base de datos $nombreNuevaBaseDeDatos, ha sido creata de forma exitosa";
				echo "<br>";
				echo "El script utilizado fue: $consulta";
			}

			else {
				"La base de datos $nombreNuevaBaseDeDatos no se ha podido crear" . mysqli_error($conexion);
			}

			mysqli_close($conexion);

		?>

	</body>

</html>