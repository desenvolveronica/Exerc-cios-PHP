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
echo $cliente -> chamada();