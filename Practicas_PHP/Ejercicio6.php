<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 6</title>
        <style type="text/css">
            ol {
                width: 50px;
            }
            li {
                border: 1.5px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <?php
            define("NUMERO_ELEMENTOS", 20);
        ?>
        <t1>Ejercicio 5</t1>
        <ol>
        <?php
            //Generamos array con elementos.
            $array_numeros = array();
            for ($i = 1; $i <= NUMERO_ELEMENTOS; $i++) {
                $array_numeros[] = $i;
            }
            //print_r($array_numeros);

            //Ponemos elementos en una ordered list.
            foreach ($array_numeros as $elemento) {
                echo "<li>$elemento</li>";
            }
        ?>
        </ol>
    </body>
</html>