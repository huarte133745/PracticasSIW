<?php
    $numerofilas = $_GET['numerofilas'];
    $texto = $_GET['texto'];

    $color1=['red',  'green',  'blue',  'Brown',  'gray',  'yellow','orange','white'];
    $color2=['red',  'green',  'blue',  'Brown',  'gray',  'yellow','orange','white'];
    echo "<table border =1>";
    for ($i = 1; $i <= $numerofilas; $i++) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        if($i<count($color1)){
            echo ($i %2 == 0) ? "<td style='background-color: " . $color1[$i] . ";'>".$texto."</td>": "<td style='background-color: " . $color2[$i] . ";'>".$texto."</td>";
        }else{
            echo ($i %2 == 0) ? "<td style='background-color: " . $color1[$i%count($color1)] . ";'>".$texto."</td>": "<td style='background-color: " . $color1[$i%count($color1)] . ";'>".$texto."</td>";
        }
        echo "</tr>";
    }
    echo"</table>";

?>