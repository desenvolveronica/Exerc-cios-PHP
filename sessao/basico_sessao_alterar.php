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


?>
<br>
<br>
<p style="color: blueviolet">
<a href="http://localhost/exercicio.php?dir=sessao&file=basico_sessao"><b style="font-size: 25px">Voltar Sessão</b></a></p>