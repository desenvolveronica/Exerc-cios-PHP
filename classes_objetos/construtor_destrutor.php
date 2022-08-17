<div class="titulo">Construtor & Destrutor</div>

<?php
echo "Quando chamamos o NEW estamos CHAMANDO a função contruct <br>";
class Pessoa {
          //ATRIBUTOS
          public $nome;
          public $idade;

          function __construct($novoNome, $idade = 18) //indicar quais os parâmetros quer receber no momento que chamar o NEW
          //podemos passar um valor PADRÃO para os parâmetros SE QUISER
          {
                 echo "Constructor invocado! <br>"; 
                 $this->nome = $novoNome; //this apontando para $nome RECEBE o valor de $novoNome  
                 $this->idade = $idade; //$this apontando parA $idade recebe o valor de $idade
          }

          function __destruct() //ELE NÃO RECEBE NENHUM PARÂMETRO
          {
                    echo "Destructor CHAMADO! <br>";
          }

          public function apresentar(){
                    return "$this->nome : $this->idade";
          }
}

echo " <br>THIS significa o atributo do OBJETO (estância da classe) <br>";
echo "1- Estanciar a classe com NEW criando uma variável <br>";
echo "2- Estanciar a classe <br>";
echo "1- Estanciar a classe <br>";

$people = new Pessoa('Diva', 29);
echo $people ->apresentar();     