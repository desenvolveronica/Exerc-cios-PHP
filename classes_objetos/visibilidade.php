<div class="titulo">Visibilidade</div>

<?php
echo "Trabalhando com modificadores de ACESSO <br>";

class A {
          public $publico = "Público";
          protected $protegido = "Protegido";
          private $private = "Privado";

          public function mostrarA(){
                    echo "a) Público: {$this->publico} <br>";
                    echo "b) Protegido: {$this->protegido} <br>";
                    echo "c) Privado: {$this->private} <br>";

          }
}

echo "NOTAS: <br>  Uma função definida no escopo da classe tem acesso a TODOS os seu atributos. Mesmo os PRIVATE ";
echo "<br>  Só a PRÓPRIA CLASSE consegue acessar um atributo PRIVATE <br>";
echo "Só consegue acessar um atributo <strong>PUBLIC, PROTECTED</strong> ou <strong>PRIVATE</strong> usando o THIS <br>";
echo "<br>";
echo "<hr>";
echo "<br>";

$subA = new A;
$subA -> mostrarA();
