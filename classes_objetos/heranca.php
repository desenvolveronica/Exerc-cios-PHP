<div class="titulo">Herança</div>

<?php

class Pessoa {
//public é um tipo de modificador de acesso
          public $nome;
          public $idade;

          function __construct($novoNome, $novaIdade)
          {
                    $this->nome = $novoNome;
                    $this->idade = $novaIdade;
                    echo "Pessoa Criada! <br>";
          }
}