<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoinha {
         public $nome;
         public $idade;

         function __construct($nome, $idade){   //construct é um método mágico
                    $this->nome = $nome;
                    $this->idade = $idade;

                    echo "Construtor invocado!! <br>";
         }

//          function __destruct() {
//                     echo "Tchau <br>";
//          }


          public function __toString()  //chamaado quando um objeto precisar ser convertido em string este método é chamado
          {
                   return "{$this->nome } tem {$this->idade} anos !<br>"; 
          }

          public function apresente(){
                    echo $this . "<br>"; //this refere-se ao OBJETO e internamente chama o toString
          }
}

$pessoinha = new Pessoinha('Tita', 29); //acessado ao chamar o THIS

echo "<br> Usando método tostring <br>";
echo $pessoinha->__toString();

echo "<br> Usando método apresente => THIS refere-se ao OBJETO<br>";
echo "Internamente o THIS vai chamar o toString <br>";
$pessoinha->apresente();

echo "Chamando o objeto e internamente o toString <br>";
echo $pessoinha; 

echo "<br> Alterando o valor da variável nome e chamando a instância <br>";
$pessoinha->nome = 'Tafônica';
echo $pessoinha;


echo "<br>Cheguei aqui <br>";     


