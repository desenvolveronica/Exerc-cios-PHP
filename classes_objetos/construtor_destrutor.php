<div class="titulo">Construtor & Destrutor</div>

<?php
echo "Quando chamamos o NEW estamos CHAMANDO a função contruct <br>";
echo "Primeira forma :<br>";
class Pessoa {
          //ATRIBUTOS
          public $nome;
          public $idade;

          function __construct() //indicar quais os parâmetros quer receber no momento que chamar o NEW
          //podemos passar um valor PADRÃO para os parâmetros SE QUISER
          {
                 echo "Constructor invocado! <br>"; 
                 $this->nome = 'Diva'; //this apontando para $nome RECEBE o valor de $novoNome  
                 $this->idade = 29; //$this apontando parA $idade recebe o valor de $idade
          }

          function __destruct() //ELE NÃO RECEBE NENHUM PARÂMETRO
          {
                    echo "Destructor CHAMADO! <br>";
          }

          public function apresentar(){
                    return "Nome: $this->nome <br> Idade: $this->idade";
          }
}

echo " <br>THIS significa o atributo do OBJETO (estância da classe) <br>";
echo "1- Estanciar a classe com NEW criando uma variável <br>";
echo "2- Neste caso o constructor está SETANDO os valores e como ele aponta para this em tela aparece os valores do constructor <br><br>";

$people = new Pessoa();
echo $people ->apresentar();     
echo "<br>Segunda forma :<br>";