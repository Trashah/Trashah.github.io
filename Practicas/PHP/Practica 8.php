<!DOCTYPE html>

<html lang = "es">

	<head>

		<title> Octava Ofrenda </title>
		<meta charset = "UTF-8">

	</head>

	<body>

		<?php
			
			require "config.php";

			echo "<h2>Práctica 8: Eliminación de una base de datos</h2>";
			echo "<br> <br>";

			$baseDeDatos = "Programacion_Web_Uriel_php_Nuevo";

			$consulta = "DROP DATABASE $baseDeDatos";

			$resultado = mysqli_query($conexion, $consulta);

			if ($resultado) {
				echo "La base de datos $baseDeDatos, ha sido eliminada de forma exitosa";
			}

			else {
				echo "La base de datos $baseDeDatos no se ha podido eliminar.<br>Error: " . mysqli_error($conexion);
			}

			echo "<br> <br>";
			echo "El script utilizado fue: $consulta";

			mysqli_close($conexion);

		?>

	</body>

</html>