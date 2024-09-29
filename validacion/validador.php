<?php
$nombre = "Brayan_Dev";
$password = "Contraseña";

if (isset($_GET["enviar_hdn"])) {
    if ($nombre == $_GET["nombre_txt"] && $password == $_GET["password_txt"]) {
        echo "El nombre que ingresaste por GET es " . $_GET["nombre_txt"] . ".<br/> el password que ingresaste por GET es" . $_GET["password_txt"] . ".<br/> el sexo seleccioando es " . $_GET["sexo_rdo"];
    } else {
        header("Location: formulario.php?error=si");
    }
    ;
}

?>