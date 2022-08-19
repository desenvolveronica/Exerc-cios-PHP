<div class="titulo">Visibilidade</div>

<?php
echo "Trabalhando com modificadores de ACESSO <br>";

class A {
          public $publico = "Público";
          protected $protegido = "Protegido";
          private $private = "Privado";

          public function mostrarA(){

                    $this->naoMostrar(); //o this mostra que é uma função do OBJETO

                    echo "<br> class A =>  Atributo Público: {$this->publico} <br>";
                    echo "class A =>  Atributo Protegido: {$this->protegido} <br>";
                    echo "class A =>  Atributo Privado: {$this->private} <br>";

          }

          private function naoMostrar(){
                    echo "Sou uma função privada";
          }
}

echo "NOTAS: <br>  Uma função definida no escopo da classe tem acesso a TODOS os seu atributos. Mesmo os PRIVATE ";
echo "<br>  Só a PRÓPRIA CLASSE consegue acessar um atributo PRIVATE <br>";
echo "Só consegue acessar um atributo <strong>PUBLIC, PROTECTED</strong> ou <strong>PRIVATE</strong> usando o THIS <br>";
echo "<br>";
echo "<hr>";
echo "<br>";

$subA = new A;
echo "<strong>Function pública chamando uma function PRIVATE com o THIS<br></strong>";
echo "<br>";
$subA -> mostrarA();
echo "<br>";
echo "<br>";
echo "Uma função <strong>PRIVATE</strong> só é mostrada a partir de uma outra função (pública) no escopo da CLASSE <br>";
echo "Ou seja, mesmo instanciando NÃO é possível chamar esta função direto<br>";
