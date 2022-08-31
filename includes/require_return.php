<div class="titulo">Require & Return</div>

<?php

echo "**REQUIRE em um arquivo com RETURN <br>";

$valorRetorno = require('return_usado.php');
echo $valorRetorno; 
echo "<br>**Acessando a variável em escopo global <br>";
echo $variavelRetornada;
echo "<br> Constante __DIR__ representa a pasta atual <br>";
echo __DIR__ . '<br>';


echo "<br>Constante __FILE__ representa o nome do arquivo <br>";
echo __FILE__ , '<br>';


echo "<br>Acessando pelo caminho absoluto <br>";
echo "Como o arquivo chamado no require NÃO tem um return, ele vai retornar 1(true) se o 
arquivo for retornado com sucesso e 0(falso) se nao for <br>";
$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php');
echo $valorRetorno2 . "<br>";
echo "Chamando a variável global de 'return_nao_usado.php'<br>";
echo $variavelDeclarada;



echo "<br><br><br> cheguei aqui";