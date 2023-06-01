<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 8</title>
    </head>
    <body>
        <h1>Ejercicio 8</h1>
        <?php
            generar_tabla(20, "Esta es la frase que pongo.");
        ?>
    </body>
</html>
<?php
    function generar_tabla($numero_filas, $frase)
    {
        echo "<table>";
        for($i = 0; $i < $numero_filas; $i++)
        {
            echo "<tr><td>$frase</td></tr>";
        }
        echo "</table>";
    }
?>