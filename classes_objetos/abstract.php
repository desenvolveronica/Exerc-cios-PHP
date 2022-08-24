<div class="titulo">Classe Abstrata</div>

<?php
echo "Uma classe ABSTRATA não pode ser INSTANCIADA <br>";
echo "Como uma classe abstrata não pode ser instanciada o seu único propósito é para ser HERDADDA <br>";

abstract class Abstrata {
          // criando métodos abstratos
          //caracter´stica de uma método abstrato é não ter corpo sendo somente assinatura
          abstract public function metodo1();

          //método protected é transmitido por herança
          protected abstract function metodo2($parametro);

}
//uma classe abstrata pode ser herdada por outra classe abstrata

abstract class FilhaAbstrata extends Abstrata {
          //uma classe abstrata pode ter métodos concretos ou não 
          //Ao implementar uma método abstrato é necessário rtirar este marcador (abstract)

          public function metodo1(){
                    echo "Executando método 1 <br>";
          }

          abstract public function metodo3();
}
echo "Para usar os métodos de uma classe ABSTRATA cuja função é passar por herança, é 
preciso ter uma classe concreta (que pode ser instanciada)<br>";
echo "<br><hr>";
class Mae extends FilhaAbstrata {
          public function metodo1(){
                    echo "Executando método 1 a partir da classe mãe<br>";
          }

          public function metodo2($parametro){
                    echo "{$parametro}: Neste caso o this para acessar o parâmetro não funciona <br>";
          }
          public function metodo3(){
                    echo "Executando método 3 a partir da classe mãe<br>";
          }
}

$mae = new Mae;
$mae -> metodo1();
$mae -> metodo2('parâmetro');
$mae -> metodo3();