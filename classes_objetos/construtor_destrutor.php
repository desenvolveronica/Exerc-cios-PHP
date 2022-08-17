<div class="titulo">Construtor & Destrutor</div>

<?php
echo "Quando chamamos o NEW estamos CHAMANDO a função contruct <br>";
echo "**Primeira forma :<br>";
class Pessoa {
          //ATRIBUTOS
          public $nome;
          public $idade;

          function __construct() //indicar quais os parâmetros quer receber no momento que chamar o NEW
          //podemos passar um valor PADRÃO para os parâmetros SE QUISER
          {
                 echo "Constructor invocado em Pessoa! <br>"; 
                 $this->nome = 'Diva'; //this apontando para $nome RECEBE o valor de $novoNome  
                 $this->idade = 29; //$this apontando parA $idade recebe o valor de $idade
          }

          function __destruct() //ELE NÃO RECEBE NENHUM PARÂMETRO
          {
                    echo "Destructor CHAMADO! em PESSOA <br>";
          }

          public function apresentar(){
                    return "Nome: $this->nome <br> Idade: $this->idade";
          }
}

echo " <br>THIS significa o atributo do OBJETO (estância da classe) <br>";
echo "1- Estanciar a classe com NEW criando uma variável <br>";
echo "2- Neste caso o constructor está SETANDO os valores e como ele aponta para this em tela aparece os valores do constructor <br><br>";

$people = new Pessoa();
echo $people -> apresentar(); 

echo "<br><br>**Segunda forma :<br>";
class cliente {
          public $nome;
          public $idade;

          function __construct($novoNome, $idade = 18) // Opcional passar os parâmetros
          {
                   $this->nome = $novoNome; //neste ponto estou vinculando o parâmetro do constructor com o da classe
                   $this->idade = $idade;
                   echo "Constructor chamado novamente (cliente)<br>";
          }

          function __destruct() //ele não recebe parâmetros
          {
                   echo "Destructor chamado  em CLENTE! <br>"; 
          }

          public function chamada($novoNome, $idadex){
                    return "Nome: $novoNome , Idade: $idadex <br>";
          }


}
$cliente = new Cliente('Verônica'); //quando chama o NEW ele acessa o constructor
//O constructor pede os PARÂMETROS 
//não pediu o de $idade pois já está setado
echo $cliente -> chamada("Verônica", 29) . "<br>";

echo "**Terceira forma :<br>";

class Humano {
          public $nome;
          public $idade;

          function __construct($outroNome, $outraIdade = 18)
          {
                    $this->nome = $outroNome;
                    $this->idade = $outraIdade;
                    echo "Construct Humano <br>";
          }

          function __destruct()
          {
                    echo "Destruct Humano <br>";
          }

          public function humaninho(){
                    return " {$this->nome} com {$this->idade} anos <br>";
          }
}

$maninho = new Humano('Trafônica', 29);  //precisa colocar os parênteses junto com argumentos pois tem o constructor
//Estanciado o Humano com o OBJETO MANINHO
//MANINHO pode acessar o método de HUMANO

echo $maninho -> humaninho();

echo "Chamando o destructor com unset() ou setando com null => o endereço é liberado na memória <br>";
unset($pessoa);
