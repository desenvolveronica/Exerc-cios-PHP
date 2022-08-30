<div class="titulo">Include</div>

<?php

echo "Executei a linha do arquivo include <br>";

echo "<br>Inserindo arquivo com include <br>";
include('./includes/include_arquivo.php');
echo "<br> Ao carregar o arquivo com INCLUDE temos a disposição tudo o que foi definido neste arquivo <br>";
echo "**Acessando função do outro arquivo <br>" . soma(3,5) . "<br>";
echo "Acessando o conteúdo da variável do outro arquivo <br> '{$variavel}' <br> ";
echo "<br>";


echo "Ao tentarmos chamar o arquivo novamente iremos ter problemas pq o arquivo incluído DEFINE uma function <br>";
echo "Para conseguirmos carregar o arquivo novamente precisamos resolvere este problema <br>";
echo "Com (!function_exists) passando no arquivo que é chamado mais de 1x: include_arquivo<br>";
echo "<br>";
include('include_arquivo.php');
echo "Entra no else por já ter sido chamado antes <br>";