<div class="titulo">Include VS Require</div>

<?php

echo "<ul>
<p>Include com arquivo inexistente</p>
<li>Ao criar um INCLUDE com arquivo INEXISTENTE, a aplicação apenas gera um erro no console</li>
<li>O código abaixo deste include vai ser interpretado normalmente</li>
<li>Para vizualizar os erros use: ini_se('display_errors')</li>
</ul>";

echo "Include com arquivo inexistente <br>";
include('arquivo_inexistente.php');


echo "Echo após include com arquivo inexistente <br>";
echo "Uso do display_errors que deve ser feito <strong>ANTES</strong> do INCLUDE com o arquivo errado<br>";
ini_set('display_errors' , 1);
include('arquivo_inexistente.php');

echo "<br><hr>";

echo "Usando Require <br>";

echo "***require('novoArquivo_inexistente.php') <br>";
echo "Qualquer código abaixo de um erro com REQUIRE não é interpretado e a aplicação gerqa erro FATAL <br>";


