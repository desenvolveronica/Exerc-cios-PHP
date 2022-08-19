<div class="titulo">Herança</div>

<?php

class Pessoa13 {
//public é um tipo de modificador de acesso
          public $nome;
          public $idade;

          function __construct($novoNome, $novaIdade)
          {
                    $this->nome = $novoNome;
                    $this->idade = $novaIdade;
                    echo "Pessoa Criada! <br>";
          }

          // function __destruct()
          // {
          //           echo "Tchau... <br>";
          // }

          public function apresentarOutro($nome, $idade){
                    echo "Nome: {$nome}, Idade: {$idade} <br>"; //desta forma acessa os parâmetros da chamada da funçaõ 
                    echo "Nome: {$this->nome}, Idade: {$this->idade} <br>"; //desta forma acessa os parâmetros de quando estanciou usando o New
          }
}

$essoa = new Pessoa13('Tuti', 13); //estes valores são usados se na função estiver chamando o THIS
echo $essoa -> apresentarOutro('Tata', 31); //esses valores são usados se na função tiver somente a variável
echo "Passando aqui";
echo "<br> ";
echo "<br> ";
echo "<br> ";
echo "<hr>";
echo "Herança com EXTENDS";
echo "<br> ";
echo "Quando passamos uma classe com EXTENDS de outra estamos usando o conceito de herança";
echo "Neste caso a nova classe herda atributos e métodos da classe mãe";
class Usuario extends Pessoa13{

}