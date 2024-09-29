<!DOCTYPE html>

<head>
    <title>Env&acute; o de datos por GET y POST</title>
    <meta charset="utf-8">
</head>

<body>
    <hgroup>
        <h1>formulario enviado por el m&eacute; todo GET</h1>
    </hgroup>
    <form name="envia-get_frm" action="envio-datos.php" method="get" enctype="application/x-www-form-urlencoded">
    <label>Ingresa Tu Nombre:</label>
    <input type="text" name="nombre_txt" />
    <br/><br/>
    <label>Ingresa Tu Password:</label>
    <input type="password" name="password_txt" />
    <br/><br/>
    <input type="submit" name="enviar_btn" value="envia-GET" />
    </form>

    <hgroup>
        <h1>formulario enviado por el m&eacute; todo POST</h1>
    </hgroup>
    <form name="envia-post_frm" action="envio-datos.php" method="post" enctype="application/x-www-form-urlencoded">
    <label>Ingresa Tu Nombre:</label>
    <input type="text" name="nombre_txt" />
    <br/><br/>
    <label>Ingresa Tu Password:</label>
    <input type="password" name="password_txt" />
    <br/><br/>
    <input type="submit" name="enviar_btn" value="envia-POST" />
    </form>
</body>
<html>