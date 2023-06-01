<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <h1>Ejercicio 10</h1>
        <?php
            define("NUMERO_REPETICIONES", 100);
            
            $imagen_pato = "https://tse2.mm.bing.net/th?id=OIP.Y4WWLfvcHiD80BBgcM946gHaFj&pid=Api&P=0&h=180";
            $imagen_chocobollo = "https://tse4.mm.bing.net/th?id=OIP.TQo_Bx32qrcJOAAI-mzAvgHaHF&pid=Api&P=0&h=180";
            for($i = 0; $i < NUMERO_REPETICIONES; $i++)
            {
                echo "<img src=$imagen_pato alt='Imagen de un pato en el agua' height=200px width=200px>";
                echo "<img src=$imagen_chocobollo alt='Imagen de un chocobollo' height=200px width=200px>";
            }
        ?>
    </body>
</html>