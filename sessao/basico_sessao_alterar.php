<?php
session_start();

print_r($_SESSION);
echo "<br>";
echo "<br> Conseguimos passar informações de uma página para outra, via SESSÃO <br>";
echo "É necessário inicializar a sessão nelas <br>";

?>

<p>
    <b>Nome: </b><?=  $_SESSION['nome']?><br>
    <b>Email: </b><?=  $_SESSION['email']?>
</p>

<?php

if($_SESSION['nome'] == 'Diva'){
          $_SESSION['nome'] = 'Novelesca';
}

$_SESSION['email'] = 'Novelesca.com.br';

print_r($_SESSION);

$_SESSION['nome'] = 'Alterado';

?>
<p>
    <b>Nome: </b><?=  $_SESSION['nome']?><br>
    <b>Email: </b><?=  $_SESSION['email']?>
</p>
<strong style="color:red; font-weight: bold; font-size: 25px">Alteração reflete entre os arquivos </strong>
<br>

<div style="display: flex; padding: 20px">
     <p style="color: blueviolet; padding: 0 20px">
        <a href="http://localhost/exercicio.php?dir=sessao&file=basico_sessao"><b style="font-size: 25px">Voltar Sessão</b></a>
     </p>
     <p style="color: blueviolet">
        <a href="/sessao/basico_sessao_limpar.php" style="color: blueviolet" ><b style="font-size: 25px">Limpar Sessão</b></a>
     </p>
</div>

