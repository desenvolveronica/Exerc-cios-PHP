<div class="titulo">Visibilidade</div>

<?php
echo "Trabalhando com modificadores de ACESSO ou seja, <strong> encapsulamento </strong> <br> ";
echo "Para acessar as variáveis internas da classe sendo <strong>PUBLIC, PROTECTED </strong>e <strong>PRIVATE</strong>";
echo " é preciso chamar o <strong>THIS -></strong> <br>";

class A {
          public $public = 'Público';
          protected $protected = 'Protected';
          private $private = 'Private';

          public function mostraA(){

                    $this->protegida();
                    $this->privada();
                    echo "<br>";
                    echo "Variável interna de A Pública : {$this->public} <br>";
                    echo "Variável interna de A Protected : {$this->protected} <br>";
                    echo "Variável interna de A Private : {$this->private} <br>";
          }

          protected function protegida(){
                    echo "Esta é uma função PROTEGIDA que pode ser passada por herança<br>";
          }

          private function privada(){
                    echo "Esta é uma função PRIVADA <br>";
          }
}

$subA = new A;
echo "<br>***Função interna da classe: mostraA()<br><br>";
$subA -> mostraA();
echo "<br>";
echo "Para poder acessar uma funçaõ PRIVATE ou PROTECTED é preciso que as mesmas sejam chamadas em uma função PUBLICA dentro da propria classe ";

echo "<br>Para acessar qualquer propriedade interno da classe é preciso INSTANCIAR a mesma e chamar o THIS <br>";
echo "<br>";

echo "Herança: <br>";
echo "<br>";


class B extends A {

          public function mostraB(){

                    parent::protegida();
                    echo "<br>";

                    echo "Variável interna de A sendo usada por B Pública : {$this->public} <br>";
                    echo "Variável interna de A sendo usada por B Protected : {$this->protected} <br>";
                    echo "***Um atributo protegido existe justamente para ser transmitido de herança <br>";
                    echo "Variável interna de A sendo usada por B Private : {$this->private} <br>";
                    echo "***Um atributo privado é RESTRITO a classe a qual foi definido.Não é transmitido por herança<br>";
          }




}

echo "Um filho que foi criado com extends do pai pode acessar os métodos do mesmo <br>";
$subB = new B;
echo "FILHO B acessando o mostraA() do PAI <br><br>";
$subB->mostraA();
echo "<br>***O filho consegue acessar TUDO da funçaõ PÚBLICA do pai<br>";
echo "<br>";
$subB->mostraB();
echo "<br>";
echo "Cheguei aqui  <br>";

