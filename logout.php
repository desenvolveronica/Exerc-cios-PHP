<?php
session_start();
session_destroy();
unset($_COOKIE['usuario']); //matando o cookie
setcookie('usuario', ''); //setando usuário para string vazia 
header('Location: login.php');
//se o usuário clicar em deslogar ele de fato estará deslogado