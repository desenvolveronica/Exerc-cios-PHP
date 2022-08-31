<div class="titulo">Include ONCE</div>

<?php

ini_set('display_errors', 1);  //pra mostar erros

include('include_once_arquivo.php');

//require('include_once_arquivo.php'); Fatal error: Cannot redeclare soma()
//este erro pode ser barrado com function_exists()
echo "Alterando o valor da variável 'variavelGlobal' <br>";
$variavelGlobal= 'Valor alterado' . '<br>';
echo $variavelGlobal;
echo "<br><hr>";
echo "Ao chamar o include do mesmo arquivo, no caso da FUNCTION estar protegida com o function_extists, 
o valor da variável é REDEFINIDO <br><br>";

echo "Include ONCE   => 'include_once'<br>";
echo "Com a função ONCE para chamar 1x, ela não foi chamada novamente e o valor da variável continua o mesmo <br>";
include_once('include_once_arquivo.php');
echo $variavelGlobal;
echo "<br>Lógica também funciona para o REQUIRE com 'require_once' <br>";
require_once('include_once_arquivo.php');









echo "<br><br>Cheguei aqui ";
