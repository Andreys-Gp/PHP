<?php 
if(isset($_GET["enviar_btn"])){
    echo "los datos se env&iacute;aste por el m&eacute; todo GET,los datos son:<br/><br/> el nombre es: ".$_GET["nombre_txt"]."<br/>el password es: ".$_GET["password_txt"];
}else if(isset($_POST["enviar_btn"])){
    echo "los datos se env&iacute;aste por el m&eacute; todo POST,los datos son:<br/><br/> el nombre es: ".$_POST["nombre_txt"]."<br/>el password es: ".$_POST["password_txt"];
}


?>