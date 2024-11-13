<!DOCTYPE html>



<html>

    <head>

        <title> Quinto Quehacer  </title>
        <meta charset = "UTF-8">

    </head>

    <body>

        <?php
        
        $dia = date("l");

        switch ($dia) {
            case "Monday":
                echo "Hoy es Lunes";
                break;
            case "Tuesday":
                echo "Hoy es Martes";
                break;
            case "Wednesday":
                echo "Hoy es Miercoles";
                break;
            case "Thursday":
                echo "Hoy es Jueves";
                break;
            case "Friday":
                echo "Hoy es Viernes";
                break;
            case "Saturday":
                echo "Hoy es Sabado";
                break;
            case "Sunday":
                echo "Hoy es Domingo";
                break;

            default:
        }

        ?>
    </body>

</html>