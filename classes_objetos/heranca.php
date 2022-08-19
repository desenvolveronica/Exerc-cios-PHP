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
echo "**Herança com EXTENDS";
echo "<br> ";
echo "<br> ";
echo "Quando passamos uma classe com EXTENDS de outra estamos usando o conceito de herança <br>";
echo "Neste caso a nova classe herda atributos e métodos da classe mãe <br>     ";
echo "<br>  Em suma a classe Pessoa13 que é a classe PAI ou seja,  uma SUPERCLASSE e é mais genérica <br>";
echo "A classe Usuario que é a classe FILHA ou seja, é uma SUBCLASSE e mais ESPECÍFICA <br>";
echo "Tradução:  A classe USUARIO tem TUDO que a classe PESSOA13 tem e terá outros elementos <br>";
echo "<br>";



class Usuario extends Pessoa13{
          public $login;

          function __construct($nome, $idade, $login)
          {
                   $this->nome = $nome;
                   $this->idade = $idade;
                   $this->login = $login; 
                   echo "Usuário instanciado <br>";
          }

          public function apresentar(){
                    echo "{$this->login}: {$this->nome}, {$this->idade} anos";
          }
}

$usuario = new Usuario('Trafônica', 30, 'Nove@lesca');
echo "Usuário tem acesso a function apresentar que está definida no escopo da sua classe <br>";
$usuario -> apresentar(); //usuário tem acesso a função apresentar que está definida no escopo da sua classe.
echo "<br>";
echo "<br> ******ATENÇÃO <br>";
echo "<br> Usuário tem acesso a função da classe PAI <br>";
$usuario -> apresentarOutro('Trafônica' ,30); //nesta função pede nome e idade
echo "<br><hr>";
