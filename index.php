<?php 
require_once('controller_login.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegacao" style="margin-top: -6px">
        <div class="index_button">
            <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
            <div  class="button" >
                <a href="sair.php" class="azul" style="margin-top: 1px">Sair</a>
                <a href="logout.php" class="vermelho" style="margin-top: 1px">Deslogar</a>
            </div>
        </div>
    </nav>
    <main class="principal" style="margin-top: 5px">
        <div class="conteudo">
            <?php require_once('menu.php'); ?>
        </div>
    </main>
    <footer class="rodape">
        desenvolveronica © <?= date('Y'); ?>
    </footer>
</body>

</html>

<style>
    .button{
        display: flex;
    }
    .index_button{
    display: flex;
    background-color: #555;
    padding: 15px;
    }
    span.usuario {
    flex-grow: 1;
    justify-self: flex-start;
    color: #EEE;
    font-size: 1.5rem;
    font-weight: 300;
    padding-right: 1510px;
}
.button > a.vermelho { 
    text-decoration: none;
    color: #FFF;
    font-weight: 300;
    font-size: 1.3rem;
    background-color: #F44336;
    padding: 2px 20px;
    margin-right: 10px;
}
.button > a:hover.vermelho { 
    background: pink;
    color: #222;
    border: solid 1px #222;
}
.button > a.azul { 
    text-decoration: none;
    color: #FFF;
    font-weight: 300;
    font-size: 1.3rem;
    background-color: #2196f3;
    padding: 2px 20px;
    margin-right: 10px;
}
.button > a:hover.azul { 
    background: pink;
    color: #222;
    border: solid 1px #222;
}


</style>