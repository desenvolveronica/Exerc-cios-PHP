<?php 
session_start();
if(!$_SESSION['usuario']){
    header('Location: login.php');
}
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
    <nav class="navegacao">
        <div class="index_buttom">
            <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
            <a href="logout.php" class="vermelho">Sair</a>
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
    .index_buttom{
    display: flex;
    align-items: center;
    background-color: #555;
    padding: 15px;
    margin-top: -7px
    }
    span.usuario {
    flex-grow: 1;
    color: #EEE;
    font-size: 1.5rem;
    font-weight: 300;
    padding-right: 1630px;
}
.index_buttom > a.vermelho { 
    text-decoration: none;
    color: #FFF;
    font-weight: 300;
    font-size: 1.3rem;
    background-color: #2196f3;
    padding: 2px 20px;
    margin-right: 10px;
}
.index_buttom > a:hover.vermelho { 
    background-color: red;
}

</style>