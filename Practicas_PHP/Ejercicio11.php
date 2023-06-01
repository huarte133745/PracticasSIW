<?php
    //Obtenemos número de filas por URL. --> Consulta: Ejercicio11.php?numero=3
    $numero_filas = $_GET['numero'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 11</title>
    </head>
    <body>
        <h1>Ejercicio 11</h1>
        <table border=1.5px>
            <?php
                for($i = 1; $i <= $numero_filas; $i++)
                {
                    echo "<tr><td>“Hola mundo!!!!”</td><td>$i</td></tr>";
                }
            ?>   
        </table>
    </body>
</html>