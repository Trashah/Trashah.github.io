<!DOCTYPE html>



<html>

    <head>

        <title> Tercer Tiro </title>
        <meta charset = "UTF-8">

    </head>

    <body>

        <?php
        $a = 8;
        $b = 12;
        $c = 5;
        $d = 20
        ?>
        <h2> Operadores aritméticos </h2>
        <?php
        echo "La variable a vale $a <br>";
        echo "La variable b vale $b <br>";
        echo "Esto es una suma $a + $b = " . $a + $b . "<br>";
        echo "Esto es una resta $a - $b = " . $a - $b . "<br>";
        echo "Esto es una multiplicación $a * $b = " . $a * $b . "<br>";
        echo "Esto es una división $a / $b = " . $a / $b . "<br>";
        echo "Esto es el residuo de una división $a % $b = " . $a % $b;
        ?>
        
        <br> <br>

        <h2> Operadores de incremento y decremento</h2>
        <?php
        echo "La variable a vale $a, sin embargo, si aplico un Posincremento, el resultado será el mismo, ya que el incremento lo hace despues $ a ++ = " . $a++ . "<br>";
        echo "La variable b vale $b, sin embargo, si aplico un Preincremento, el resultado cambia, ya que el incremento lo hace en el momento ++ $ a = " . ++$b . "<br>";
        echo "La variable c vale $c, sin embargo, si aplico un Posincremento, el resultado será el mismo, ya que el decremento lo hace despues $ c -- = " . $c-- . "<br>";
        echo "La variable d vale $d, sin embargo, si aplico un Posincremento, el resultado cambia, ya que el decremento lo hace en el momento -- $ d = " . --$d;
        $b = 12;
        $d = 20;
        ?>

        <br> <br>

        <h2> Operadores de comparación </h2>
        <?php
        echo "La variable a vale $a, la variable b vale $b, si comparamos con == el resultado es: " . ($a == $b ? "verdadero" : "falso") . "<br>";
        echo "La variable a vale $a, la variable b vale $b, si comparamos con === el resultado es: " . ($a === $b ? "verdadero" : "falso") . "<br>";
        echo "La variable a vale $a, la variable b vale $b, si comparamos con <> el resultado es: " . ($a <> $b ? "verdadero" : "falso") . "<br>";
        echo "La variable a vale $a, la variable b vale $b, si comparamos con != el resultado es: " . ($a != $b ? "verdadero" : "falso") . "<br>";
        echo "La variable a vale $a, la variable b vale $b, si comparamos con !== el resultado es: " . ($a !== $b ? "verdadero" : "falso") . "<br>";
        echo "La variable a vale $a, la variable b vale $b, si comparamos con > el resultado es: " . ($a > $b ? "verdadero" : "falso") . "<br>";
        echo "La variable a vale $a, la variable b vale $b, si comparamos con < el resultado es: " . ($a < $b ? "verdadero" : "falso") . "<br>";
        echo "La variable a vale $a, la variable b vale $b, si comparamos con >= el resultado es: " . ($a >= $b ? "verdadero" : "falso") . "<br>";
        echo "La variable a vale $a, la variable b vale $b, si comparamos con <= el resultado es: " . ($a <= $b ? "verdadero" : "falso");
        ?>

        <br> <br>

        <h2> Operadores de asignación </h2>
        <?php
        $a = 0;
        echo "La variable a vale $a <br>";
        echo "La variable a con el operador de asignación = y el valor 8: a = " . ($a = 8) . "<br>";
        echo "La variable a con el operador de asignación += y el valor 8: a = " . ($a += 8) . "<br>";
        echo "La variable a con el operador de asignación -= y el valor 8: a = " . ($a -= 8) . "<br>";
        echo "La variable a con el operador de asignación /= y el valor 8: a = " . ($a *= 8) . "<br>";
        echo "La variable a con el operador de asignación /= y el valor 8: a = " . ($a /= 8) . "<br>";
        echo "La variable a con el operador de asignación  %= y el valor 8: a = " . ($a %= 8);
        $a = 8;
        ?>

        <br> <br>

        <h2> Operadores lógicos </h2>
        <?php
        echo "La variable a vale $a <br>";
        echo "La variable b vale $b <br>";
        echo "La variable c vale $c <br>";
        echo "La variable d vale $d <br>";
        echo "Comparamos si la variable a es mayor que la b, <b> y </b> si c es menor que d, con la expresión '(\$a > \$b) && (\$c < \$d)', el resultado es: "
        . (($a > $b) && ($c < $d) ? "verdadero" : "falso")
        . "<br>";
        echo "Comparamos si la variable a es mayor que la b, <b> y </b> si c es menor que d, con la expresión '(\$a > \$b) AND (\$c < \$d)', el resultado es: "
        . ((($a > $b) AND ($c < $d)) ? "verdadero" : "falso")
        . "<br>";
        echo "Comparamos si la variable a es mayor que la b, <b> o </b> si c es menor que d, con la expresión '(\$a > \$b) || (\$c < \$d)', el resultado es: "
        . (($a > $b) || ($c < $d) ? "verdadero" : "falso")
        . "<br>";
        echo "Comparamos si la variable a es mayor que la b, <b> o </b> si c es menor que d, con la expresión '(\$a > \$b) OR (\$c < \$d)', el resultado es: "
        . ((($a > $b) OR ($c < $d)) ? "verdadero" : "falso");
        ?>

        <br> <br>

        <h2> Operadores de concatenación </h2>
        <?php
        $texto1 = "'Madeline Celeste'";
        $texto2 = "'Gwen League of Legends'";
        echo "Concatenaremos con '.', este es el texto 1: " . $texto1 . " y este es el texto 2: " . $texto2;
        echo "<br>";
        $texto3 = "";
        $texto3 .= $texto1;
        $texto3 .= " ";
        $texto3 .= $texto2;
        echo "Concatenarmos con '.=', este es el texto 3: $texto3";
        ?>

    </body>

</html>

<!-- 

NOTAS

== ==== <> != !== > < >= <=
= == -= *= /= %=