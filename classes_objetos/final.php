<div class="titulo">Modificador Final</div>

<?php

echo "Classe ou método marcado com o MODIFICADOR FINAL não pode ser sobrescrito ou HERDADO <br><br>";

abstract class Abstrata {

          abstract public function metodo1();

          final public function metodo2(){
                    Echo "Marcada com o modificador FINAL <br>";
          }

          public function metodo3(){
                    echo "Método da classe Abstrata <br>";
          }
}

class NovaClasse extends Abstrata {
          public function metodo1(){
                    //pode ter corpo ou não
                    echo "Executando método 1 <br>";
          }
          //não foi possível usar o método2 pois ele não pode ser sobrescrito nem mesmo HERDADO
          // public function metodo2(){
          //           Echo "Marcada com o modificador FINAL <br>";
          // }
}

$instancia = new NovaClasse;
$instancia->metodo2();

echo "<ul>
<li>Quando a (NovaClasse) EXTENDS (abrange) a classe abstrata, o método2 passa a fazer parte do seu escopo automaticamente 
e neste caso, a partir da estância da classe concreta podemos chamar o método final marcado na classe Abstrata</li>
<li>Quando tentamos declarar este método final na classe que herdeira, ou seja, na (NovaClasse) que EXTENDS sua classe de origem, ou 
seja (classe Abstrata), é apresentado um erro</li>
</ul>";
$instancia->metodo3();

echo "<ul>
<li>Em uma classe quanado usamos o EXTENDS (abrangindo) estamos herdando também. 
Neste caso, podemos acessar o método da classe
ABRANGIDA sem precisar DECLARAR este método na classe ABRANGENTE </li>
</ul>";