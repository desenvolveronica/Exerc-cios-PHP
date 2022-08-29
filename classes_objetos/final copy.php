<div class="titulo">Modificador Final</div>

<?php


echo "<ul>
<p>Observações:</p>
<li>Quando temos uma herança além de ter acesso a métodos e propriedades podemos fazer algumas alterações, se quisermos</li>
<li>Se marcamos uma classe com FINAL evitamos que ela seja herdada</li>
<li>É possivel acessar o método FINAL (isso pq a classe não é final) através de uma instância de uma classe herdeira</li>
<li>Em uma herança de classes (que não são FINAL) não CONSEGUIMOS sobrescrever um método FINAL, mas podemos usa-lo com a instância</li>
</ul>";


abstract class ClassAbstract {
          abstract public function metodoAb1();  //como o método é abstrato ele permite somente a assinatura do método

          final public function metodoAb2(){    //como este método é concreto é necessário ter o corpo do método
                    echo "Sou FINAL e não vou mudar! <br>";
          }

}

class ClasseFilha extends ClassAbstract {
          public function metodoAb1(){  //pela herança um método que antes era abstrato vira CONCRETO
                    return 'Olá, sou um método abstrato que foi herdado <br>';
          }

          //tentando sobrescrever um método FINAL

          // public function metodoAb2(){
          //           return 'Tentando sobrescrever <br>';
          // }

          //***erro é apresentado pois não podemos sobrescrever uma método final */
          
}

$FilhaInsta = new ClasseFilha;
echo "<br> Quando o método abstrato é herdado ele NÃO pode ter somente assinatura e perde o ABSTRACT <br>";
echo 'R: ' . $FilhaInsta->metodoAb1();
echo "<br> Acessando método final através da instância da classe HERDEIRA <br>";
echo 'R: ';
echo $FilhaInsta->metodoAb2();
echo "<br><hr>";
echo "<ul>
<p>Definindo uma classe como FINAL</p>
<li>Quando uma classe é definida como FINAL ela NÃO pode ter herança</li>
<li>Ao tentar gerar uma herança com EXTENDS tudo já para de funcionar</li>
<li>Podemos INSTANCIAR esta classe FINAL normalmente</li>
<li>Para acessar um atributo não precisamos necessariamente de uma function. Pode ser feito com o nome da $ instancia -> atributo sem o $</li>

</ul>";

final class FinalUnic {

          public $att = "Atributo classe final";

          public function FinalUnic(){
                    echo "$this->att <br>";
          }
}

// class FilhaUnic extends FinalUnic{
//           //neste ponto tudo para de funcionar 
// }

$final = new FinalUnic;
$final->FinalUnic();

