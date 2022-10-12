<?php 

session_start(); //para trabalhar com session precisamos antes de qualquer coisa dar session_start()

//teste para saber se usuário está presente nos cookies
if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){ //como SESSION é um array colocamos uma condicional que diz: se no array session $_SESSION não existir posição usuário 
    header('Location: login.php');
}
?>
