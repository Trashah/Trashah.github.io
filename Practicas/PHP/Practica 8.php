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

			$conexion = mysqli_connect($servidor,$usuario,$password,$baseDeDatos);

			$baseDeDatos = "Programacion_Web_Uriel_php_Nuevo";

			$consulta = "DROP DATABASE $baseDeDatos";

			if ($resultado = mysqli_query($conexion,$consulta)) {
				echo "La base de datos $baseDeDatos, ha sido eliminada de forma exitosa";
				echo "<br>";
				echo "El script utilizado fue: $consulta";
			}

			else {
				"La base de datos $baseDeDatos no se ha podido eliminar" . mysqli_error($conexion);
			}

			mysqli_close($conexion);

		?>

	</body>

</html>