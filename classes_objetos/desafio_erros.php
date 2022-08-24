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
          }
          function metodo1(){
                    echo "Pode ser vazio desde que tenha corpo e assinatura";
          }
          public function metodo2($parametro){
                    echo "Pode ser vazio desde que tenha corpo e assinatura";
          }
}

$exemplo = new Classe('...'); //colocar pq no construct tem uma parâmetro
$exemplo-> metodo3();
echo "<br>";
echo "<ul>
<li>Uma classe abstrata pode usar uma interface com o IMPLEMENTS</li>
<li>Uma classe abrange outra classe com EXTENDS</li>
<li>Por herança a classe é OBRIGADA a declarar os métodos da sua classe mãe mesmo que nao tenha nada no CORPO</li>
</ul><br>";