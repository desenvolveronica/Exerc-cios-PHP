<!DOCTYPE html>
<html lang="en">
<head class="login">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja bem vindo</h2>
    </header>

    <main class="principal" style="margin-top: 45px">
        <div class="conteudo">
           <h3>Identifique-se</h3>

           <?php  if($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach($_SESSION['erros'] as $erro):  ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
           <?php endif ?>

           <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
           </form>

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
    justify-content: flex-end;
    align-items: center;
    background-color: #555;
    padding: 15px;
    margin-top: -27px
    }
    span.usuario {
    flex-grow: 1;
    justify-self: flex-start;
    color: #EEE;
    padding-left: 10px;
    font-size: 1.5rem;
    font-weight: 300;
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