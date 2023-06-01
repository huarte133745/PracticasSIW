<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <h1>Ejercicio 7</h1>
        <ol>
            <?php
                define("NUMERO_ELEMENTOS", 20);
                $array1 = crear_array_aleatorios(NUMERO_ELEMENTOS);
                //print_r($array1);
                $array2 = crear_array_aleatorios(NUMERO_ELEMENTOS);
                //print_r($array2);

                for($i = 0; $i < NUMERO_ELEMENTOS; $i++)
                {
                    $suma = sumar($array1[$i], $array2[$i]);
                    echo "<li>$suma</li>";
                }
            ?>
        </ol>
    </body>
</html>
<?php
    function sumar($numero1, $numero2)
    {
        return $numero1 + $numero2;
    }

    function crear_array_aleatorios($numero_elementos)
    {
        $array = array();
        for($i = 0; $i < $numero_elementos; $i++)
        {
            $array[] = random_int(0, 100);
        }
        return $array;
    }
?>