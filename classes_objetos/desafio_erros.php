<div class="titulo">Desafio 7 Erros</div>

<?php

interface Template {
          //interface recebe SOMENTE assinatura do método
          function metodo1();
          public function metodo2($parametro);

}

abstract class ClasseAbstrata implements Template {
          //pode ter somente assinatura do método e pode ter corpo tambem
          public function metodo3() {
                    echo "Estou funcionando <br>";
          }
}

class Classe extends ClasseAbstrata {
          function __construct($parametro)
          {
               $this->parametro = $parametro;   
               parent::metodo3();  
          }
          function metodo1(){
                    echo "Método 1 <br>";
          }
          public function metodo2($parametro){
                    echo "Método 2 <br>";
          }
}

$exemplo = new Classe('olá'); 
$exemplo-> metodo3();