<!DOCTYPE html>

<?php

$mensajeGlobal = "Holaaaa esto es un mensaje global";
$numeroGlobal = 8;

function imprimirMensajeLocal() {
    $mensajeLocal = "Holaaaaa como estas te estoy saludando desde un mensaje local";
    echo $mensajeLocal;
}

function imprimirMensajeGlobal() {
    echo $mensajeGlobal;
}

function imprimirNumeroGlobalYLocal1() {
    $numeroLocal = 3;
    echo "Numero Global = $numeroGlobal";
    echo "<br>";
    echo "Numero Local = $numeroLocal";
}

function imprimirNumeroGlobalYLocal2() {
    echo "Numero Local = $numeroLocal";
    echo "<br>";
    echo "Numero Global = $numeroGlobal";
}

?>

<html>

    <head>

        <title> Segunda Sesión </title>
        <meta charset = "UTF-8">

    </head>

    <body>

        <?php imprimirMensajeLocal(); ?>
        <br>
        <?php imprimirNumeroGlobalYLocal1(); ?>
        <br><br>

        <?php 
        echo "Numero Local = $numeroLocal";
        echo "<br>";
        echo "Numero Global = $numeroGlobal";
        ?>

    </body>

</html>

<!-- 

NOTAS

== ==== <> != !== > < >= <=
= == -= *= /= %=