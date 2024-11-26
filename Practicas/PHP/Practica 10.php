<!DOCTYPE html>

<html lang = "es">

	<head>

		<title> Decima Denominación </title>
		<meta charset = "UTF-8">

	</head>

	<body>

		<?php
			
			require "config.php";

			echo "<h2>Práctica 10: Consulta de las bases de datos en un servidor MySQL </h2>";
			echo "<br> <br>";

			$baseDeDatos = "Programacion_Web_Uriel_php_Nuevo";
			$conexion = mysqli_connect($servidor,$usuario,$password,$baseDeDatos);

			$consulta = "SHOW DATABASES";

			$resultado = mysqli_query($conexion, $consulta);

			echo "<table border = 1>";
			echo "<td align = center> Listado de las bases de datos </td>";

			while ($row = mysqli_fetch_array($resultado)) {
				echo "<tr>";
				echo "<td> $row[0] </td>";
				echo "</td>";
			}
			
			echo "</table>";

			mysqli_free_result($resultado);
			mysqli_close($conexion);

		?>

	</body>

</html>