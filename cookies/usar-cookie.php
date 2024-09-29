
<?php 

if(!$_COOKIE["idioma_solicitado"]){
    header("Location: perdir-idioma.php");
}else if($_COOKIE["idioma_solicitado"]=="es"){
    header("Location: espanol.php");
}else if($_COOKIE["idioma_solicitado"]=="en"){
    header("Location: ingles.php");
}

?>