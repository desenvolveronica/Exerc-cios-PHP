<div class="titulo">Modificador Final</div>

<?php


echo "<ul>
<p>Observações:</p>
<li>Quando temos uma herança além de ter acesso a métodos e propriedades podemos fazer algumas alterações, se quisermos</li>
<li>Se marcamos uma classe com FINAL evitamos que ela seja herdada</li>
<li>É possivel acessar o método FINAL (isso pq a classe não é final) através de uma instância de uma classe herdeira</li>
</ul>";


abstract class ClassAbstract {
          abstract public function metodoAb1();  //como o método é abstrato ele permite somente a assinatura do método

          final public function metodoAb2(){    //como este método é concreto é necessário ter o corpo do método
                    echo "Não vou mudar! <br>";
          }

}

class ClasseFilha extends ClassAbstract {
          public function metodoAb1(){  //pela herança um método que antes era abstrato vira CONCRETO
                    return 'Olá, sou um método abstrato que foi herdado <br>';
          }
          
}

$FilhaInsta = new ClasseFilha;
echo "<br> Quando o método abstrato é herdado ele NÃO pode ter somente assinatura e perde o ABSTRACT <br>";
echo 'R: ' . $FilhaInsta->metodoAb1();
echo "<br> Acessando método final através da instância da classe HERDEIRA <br>";
echo 'R: ';
echo $FilhaInsta->metodoAb2();


