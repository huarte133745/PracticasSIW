<?php
    $archivo = fopen("archivo.html", "w") or die("error creando fichero!");
    $txt = "<html><body><h1>Datos</h1><p>$nombre</p><p>$apellido</p></body></html>";
    fwrite($archivo, $txt);
    fclose($archivo);
?>