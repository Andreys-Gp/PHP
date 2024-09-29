<?php

foreach ($_FILES["archivo_fls"] as $clave => $valor) {
    echo "propiedad: $clave---valor: $valor <br/>";
}

$archivo = $_FILES["archivo_fls"]["tmp_name"];
$destino = "files/" . $_FILES["archivo_fls"]["name"];

if ($_FILES["archivo_fls"]["type"] == "text/plain") {
    move_uploaded_file($archivo, $destino);
    echo "Archivo subido :)";
} else {
    echo "solo archivos tipo text no : " . $_FILES["archivo_fls"]["type"]."<br/>";
    echo "<a href=\"enviar-archivo.php\">REGRESAR</a>";
}


?>