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

          public function __get($atributs){ //esta função será chamada sempre que tentar acessar um atributo não definido
                    return "Lendo um atributo não declarado de valor: {$atributs} <br>"; //não posso usar o TIHS pois 
                    //o atributo não está no construtor
          }

          public function __set($atri, $valor){ //esta function será chamada sempre que houver tentativa 
                    //de ALTERAR um atributo NÃODEFINIDO
                    echo "Alterando atributo não declarado: {$atri} / {$valor} <br>";
          }

          public function __call($metodo, $params){ //ele é chamado sempre que chama um método no objeto que nao existe
                    //necessário passar o método e os parâmetros
                    echo "Tentando executar o método {$metodo} <br>";
                    echo "com os parâmetros {$params} <br>";
                    print_r($params);
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
echo "<br><hr>";


echo "Acessando GET <br>";
echo "Não posso usar o THIS para acessar este atributo pois o mesmo não está no constructor <br>";
echo "Não foi preciso chamar o get, mas como ele 
já estava definido é retornado o nome da variável não informada <br>";
echo 'R: '. $pessoinha->nomeCompleto . '<br>';

// echo Pessoinha::__get('outro'); gera erro pois o get precisa ser chamado pela instância (dinamicamente)

echo "<hr>";
echo "Acessando SET <br>";
echo "Como o SET já está definido, ao tentar ALTERAR um atributo não declarado esta function será chamada <br>";
$pessoinha->nomeCompleto = "Divona" ;
echo "<br>";
echo 'Usando o GET => ', $pessoinha->nomeCompleto;


echo "<br><hr>";
echo "Acessando CALL <br>";
echo "Ele é chamado SEMPRE que chama no objeto um método que nao existe <br>";
echo "O que é passado como parâmetro é um Array <br>";
echo $pessoinha->funcNaoExiste();
echo "<br>";


echo "<br>Cheguei aqui <br>";     


