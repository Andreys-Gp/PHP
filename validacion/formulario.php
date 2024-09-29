<!DOCTYPE html>
<html lang="es">

<head>
    <title>validaciones</title>
    <meta charset="utf-8">
    <script>
        function validate() {
            let verfi = true;
            if (!document.valida_datos_get_frm.nombre_txt.value) {
                alert("el campo nombre es requerido")
                document.valida_datos_get_frm.nombre_txt.focus()
                verfi = false
            }
        }
        function validatepost() {
            let verfip = true;
            if (!document.valida_datos_post_frm.nombre_txt.value) {
                alert("el campo nombre es requerido")
                document.valida_datos_post_frm.nombre_txt.focus()
                verfip = false
            }
        }


        window.onload = function () {
            document.getElementById("enviar-get").onclick = validate
            document.getElementById("enviar-post").onclick = validatepost
        }

    </script>
</head>

<body>

    <?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    if($_GET["error"]=="SI"){
        echo "<span>VERIIFICA TUS DATOS</span>";
    };

    ?>

    <hgroup>
        <h1>formulario datos GET</h1>
        <form name="valida_datos_get_frm" action="validador.php" method="get"
            enctype="application/x-www-form-underlencoded">
            ingresa tu nombre
            <input type="text" name="nombre_txt" />
            <br /><br />
            ingresa tu password
            <input type="password" name="password_txt" />
            <br /><br />
            <input type="radio" name="sexo_rdo" value="M" />
            Masculino&nbsp;
            <input type="radio" name="sexo_rdo" value="F" />
            Femenino&nbsp;
            <br /><br />
            <input type="hidden" name="enviar_hdn" value="get" />
            <input type="button" name="enviar_btn" value="enviar por get" id="enviar-get" />
        </form>
    </hgroup>

    <hgroup>
        <h1>formulario datos POST</h1>
        <form name="valida_datos_post_frm" action="validador.php" method="post`"
            enctype="application/x-www-form-underlencoded">
            ingresa tu nombre
            <input type="text" name="nombre_txt" />
            <br /><br />
            ingresa tu password
            <input type="password" name="password_txt" />
            <br /><br />
            <input type="radio" name="sexo_rdo" value="M" />
            Masculino&nbsp;
            <input type="radio" name="sexo_rdo" value="F" />
            Femenino&nbsp;
            <br /><br />
            <input type="hidden" name="enviar_hdn" value="post" />
            <input type="button" name="enviar_btn" value="enviar por post" id="enviar-post" />
        </form>
    </hgroup>

</body>

</html>