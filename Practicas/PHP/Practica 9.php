<!DOCTYPE html>

<html lang = "es">

	<head>

		<title> Novena Nominación </title>
		<meta charset = "UTF-8">

	</head>

	<body>

		<?php
			
			require "config.php";

			echo "<h2>Práctica 9: Creación de una tabla en una base de datos</h2>";
			echo "<br> <br>";

			$baseDeDatos = "Programacion_Web_Uriel_php_Nuevo";
			$tabla = "Juegazos";

			$consulta = "CREATE TABLE $tabla (
						 ID_Juego INT (10) AUTO_INCREMENT PRIMARY KEY,
						 Nombre VARCHAR (100)
						 )";

			$resultado = mysqli_query($conexion, $consulta);

			if ($resultado) {
				echo "La tabla $tabla en la base de datos $baseDeDatos ha sido creada de forma exitosa";
			}

			else {
				echo "La tabla $tabla no se ha podido crear.<br>Error: " . mysqli_error($conexion);
			}

			echo "<br> <br>";
			echo "El script utilizado fue: $consulta";


			mysqli_close($conexion);

		?>

	</body>

</html>