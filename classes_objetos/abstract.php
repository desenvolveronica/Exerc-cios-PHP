<div class="titulo">Classe Abstrata</div>

<?php
echo "Uma classe ABSTRATA não pode ser INSTANCIADA <br>";
echo "Como uma classe abstrata não pode ser instanciada o seu único propósito é para ser HERDADDA <br>";

abstract class Abstrata {
          // criando métodos abstratos
          //característica de uma método abstrato é não ter corpo sendo somente assinatura
          abstract public function metodo1();

          //método protected é transmitido por herança
          protected abstract function metodo2($parametro);

}
//uma classe abstrata pode ser herdada por outra classe abstrata

abstract class FilhaAbstrata extends Abstrata {
          //uma classe abstrata pode ter métodos concretos ou não 
          //Ao implementar uma método abstrato é necessário rtirar este marcador (abstract)

          public function metodo1(){
                    echo "Executando método 1. Este está herdando da classe Abstrata e puxado para a classe filhaAbstrata<br>";
          }

          abstract public function metodo3();
}
echo "Para usar os métodos de uma classe ABSTRATA cuja função é passar por herança, é 
preciso ter uma classe concreta (que pode ser instanciada)<br>";
echo "<br><hr>";
class Mae extends FilhaAbstrata {

          public $parametro; 

          function __construct($parametro)
          {
                 $this->parametro = $parametro;   
          }

          public function metodo1(){
                    echo "Executando método 1 a partir da classe mãe<br>";
                    parent::metodo1();
          }

          public function metodo2($parametro){
                    echo "{$this->parametro}: O THIS acessa a propriedade do CONSTRUTOR<br>";
                    echo "{$parametro}: Sem usar o THIS acessa a propriedade informada na chamada do método<br>";
          }
          public function metodo3(){
                    echo "Executando método 3 da classe concreta<br>";
                    echo $this->metodo2('Class 3');
          }
}

$mae = new Mae('Construtor');
$mae -> metodo1();
echo "<br>";
$mae -> metodo2('Método');
echo "<br>";
$mae -> metodo3();