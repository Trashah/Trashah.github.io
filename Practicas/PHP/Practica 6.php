<!DOCTYPE html>

<html lang = "es">

	<head>

		<title> Sexta Sinfonía </title>
        <meta charset = "UTF-8">

	</head>

	<body>

		<?php
			
			require ("config.php");

			echo "<h2>Conexión a un servidor de datos MYSQL </h2><br>";

			$conexion = new mysqli($servidor, $usuario, $password, $baseDeDatos);

			if (!$conexion){
				die ("Error conectando con Mysql<br>" . mysqli_connect_error());
			}
			echo "¡Conexión exitosa!";

			mysqli_close($conexion);

		?>

	</body>

</html>