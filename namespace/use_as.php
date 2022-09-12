<?php NAMESPACE Outro\Nome; ?>

<div class="titulo">Use/As</div>
<?php
echo 'Estamos no: ' . __NAMESPACE__ . '<br>';
include('use_as_arquivo.php') ; //usando o include temos autonomia de usar os métodos 
//e classes do outro arquivo, bem como NAMESPACE

// echo 'Estamos no: ' . __NAMESPACE__ . '<br>';

echo \Nome\Bem\Grande\constante ;

echo "<br><hr>";

function soma($a, $b){
          return $a . $b ; //propositalmente errado e com o conflito de nome pois ambas são SOMA
}

class Classe{
          public $var = 'Variável em: **Outro\Nome';

          function func(){
                    echo 'Func criada no Outro\Nome '. __NAMESPACE__ . '-> ' . __CLASS__ . '-> ' . __METHOD__ . '<br>';  
          }
}
echo 'Usando USE' . '<br>';
echo "<br> Não é preciso usar o caminho (absoluto\) pois estando no contexto do USE o relativo já funciona <br>";
use const Nome\Bem\Grande\constante; //daqui pra baixo está usando o namespace Nome\Bem\Grande
//neste ponto podemos usar a const vonstante como se ela estivesse no PRÓPRIO arquivo
echo constante . "<br>"; 

echo 'Usando AS' . '<br>';
use Nome\Bem\Grande as ctx; //as para criar um apelido

echo ctx\constante; //usando o APELIDO
