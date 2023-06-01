<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
        <style type="text/css">
            table, tr, td, th {
                border: 1.5px solid black;
                border-collapse: collapse;   
            }
            td, th {
                padding: 1px 5px 1px 5px;
            }
        </style>
    </head>
    <body>
        <?php
            define("NUMERO_FILAS", 50);
        ?>
        <t1>Ejercicio 3</t1>
        <table>
            <tr><th>Nº Fila</th><th>Ejercicio</th><tr>
        <?php
            for($i = 1; $i <= NUMERO_FILAS; $i++)
            {
                echo "<tr><td>$i</td><td>Ejercicio número 3</td></tr>";
            }
        ?>
        </table>
    </body>
</html>