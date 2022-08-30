<div class="titulo">Construtor & Destrutor PRÁTICA</div>

<?php

class Cliente{

          public $nome = 'Verônica';
          public $idade = 28;

          function __construct()
          {
                   echo "Construtor CLIENTE chamado <br>";
          }

          function chamada(){
                    return "Olá, meu nome é $this->nome e tenho $this->idade anos. <br>"; 
          }
}

$cliente = new Cliente();
echo $cliente -> chamada(); //neste caso chama a function sem passar nada nos parâmetros pq está consumindo as informações da classe 
//com o uso do $this->nome e $this->idade

echo "<br> Novo teste <hr>";

class Usuario {

          public $nome;
          public $idade;

          public function chamada2($nome, $idade){
                   return "Olá, meu nome é $nome e tenho $idade anos.";
          }
}
$user = new Usuario;
echo $user -> chamada2('Diva', 23) . "<br>";
echo "<br> Novo teste <hr>";

class Humano1 {
          public $nome = 'Tuti'; //valor acessado quando é usado o $this->$nome
          public $idade = 10;

          public function chamada3($nome, $idade){
                    return "Olá, meu nome é $nome e tenho $idade anos <br>";
          }

}

$mano = new Humano1;
echo $mano ->chamada3('Divona', 18);