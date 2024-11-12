<!DOCTYPE html>

<html lang = "es">

    <head>

        <title> Primer PHP </title>
        <meta charset = "UTF-8">

    </head>

    <body>

        <?php

        echo "<h3> ¡Hola! ¡Este es como mi quinto script en PHP! </h3>";

        // Comentario
        # Otro comentario

        /* Esto es un bloque de mas de una línea
        de comentario */

        $texto = "<p> ¡¡Este texto esta guardado en una variable de PHP!! </p>";
        echo $texto;

        $numero1 = 5;
        $numero2 = 6;
        $resultado = $numero1 + $numero2;
        echo "<p> ¡¡¡El resultado de la sum de $numero1 y $numero2 es $resultado!!! </p>";

        ?>

    </body>

</html>