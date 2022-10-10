<?php 
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];
$_SESSION['erros'] = null;

if($_POST['email']){
    //array como se fosse banco de dados para login
    $usuarios = [
        [
            "nome" => "Veronica",
            "email" => "veronikahelena@gmail.com",
            "senha" => "123456"
        ],
        [
            "nome" => "Diva",
            "email" => "diva@gmail.com",
            "senha" => "123456"
        ],
    ];
    foreach($usuarios as $usuario){
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida){
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            header('Location: index.php');
        }
    };

    if(!$_SESSION['usuario']){
        $_SESSION['erros'] = ['Usuário/Senha inválido'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head class="login">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja bem vindo</h2>
    </header>

    <main class="principal" style="margin-top: 45px">
        <div class="conteudo">
            <h3>ACESSE SUA CONTA</h3>

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
                    <button class="button">Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        desenvolveronica © <?= date('Y'); ?>
    </footer>
</body>

</html>

<style>
h3{
          font-size: 2.1rem;
          margin: 20px
}

form > div {
          padding-bottom: 15px;
}

label, input, button {
    font-size: 1.5rem;
}
button {
    color: #FFF;
    background-color: #228b22;
}
button.button:hover{
   transform: scaleX(1.1);
}
.conteudo {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    
}
.erros > p {
    font-size: 1.4rem;
    font-weight: 300;
    color: #FFF;
    background-color: #ff4500;
    padding: 10px 25px;
    margin-top: 0px;
}
</style>