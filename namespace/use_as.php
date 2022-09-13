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
          return $a . $b . " Concatenando ao invés de somar com FUNCTION SOMA <br>" ; //propositalmente errado e com o conflito de nome pois ambas são SOMA
}

class Classe{
          public $var = 'Variável em: **Outro\Nome';

          function func(){
                    echo 'Funcão criada no Outro\Nome:  <br>'. __NAMESPACE__ . '-> ' . __CLASS__ . '-> ' . __METHOD__ . '<br>';  
          }
}
echo 'Usando USE' . '<br>';
echo "Use pode ser associado a uma CONSTANTE ou a uma FUNÇÃO<br>";
echo "<br> Não é preciso usar o caminho (absoluto\) pois estando no contexto do USE o relativo já funciona <br>";
use const Nome\Bem\Grande\constante; //daqui pra baixo está usando o namespace Nome\Bem\Grande
//neste ponto podemos usar a const vonstante como se ela estivesse no PRÓPRIO arquivo
echo constante . "<br>"; 

echo 'Usando AS' . '<br>';

use Nome\Bem\Grande as ctx; //as para criar um apelido

echo ctx\constante; //usando o APELIDO

echo "<br><hr>";
echo "Neste ponto ainda estamos em: -> ". __NAMESPACE__ . "<br>";
echo soma(1,2);
// echo \Nome\Bem\Grande\soma(1,2); //acessa a function do outro arquivo
echo ctx\soma(1,2);
echo "<br>Usando AS com uma FUNCTION para resolver conflito <br>";
use function Nome\Bem\Grande\soma as somaReal; 
echo '<br>'.'Usando apelido para função soma '. '<br>'. somaReal(1,4);
echo "<br><hr>";

$a = new Classe ; 
echo "Acessando a classe criada no arquivo atual <br>";
echo $a->var . '<br>';
$a->func();
echo "<br><hr>";

echo "Acessando a classe criada no arquivo chamado pelo INCLUDE <br>";
// $clArquivo = new \Nome\Bem\Grande\Classe; funciona
$clArquivo = new ctx\Classe; //funciona
use Nome\Bem\Grande\Classe as classinha;

$classinha = new classinha; 
echo $classinha->var . "<br>";

echo "<br>Outro Exemplo <br>";

echo $clArquivo->var . "<br>";
$classinha->func(); 





