<div class="titulo">Interface</div>

<?php

echo "Dentro da interface definimos métodos e comportamentos que <strong>DEVEM</strong> ser implementados a partir das classes <br>";
echo "Essas funções nao possuem corpo nem mesmo comportamento. <strong>SOMENTE</strong> é feita a declaração da função <br>";
echo "Esta função declarada na interface, recebe o <strong>comportamento na classe </strong> <br>";
echo "A declaração de uma interface é similar a uma classe <br>";
echo "<strong>***Uma INTERFACE é mais genérica que uma CLASSE***</strong><br>";
echo "Uma CLASSE que implementa (implements) uma INTERFACE deve obrigatoriamente <strong>USAR O MÉTODO DA INTERFACE</strong> <br>";
echo "<br><hr>";

interface Animal {
          function respirar();
          //na interface a função NÃO tem corpo
}

interface Canino {
          function agir() : string;
}

class Cachorro implements Animal, Canino {
          function respirar(){
                    echo "Respirar com oxigênio <br>";
          }
          function agir() : string{
                    return  "Agir como canino <br>";
          }
}


$dog = new Cachorro;
$dog -> respirar();
echo $dog -> agir();
echo "<br>";
echo "OBS: Uma classe pode impementar <strong>MULTIPLAS</strong> interfaces <br>";
echo "Interfaces por padrão possuem <strong>MÉTODOS PÚBLICOS</strong> <br>";
echo "Não podemos definir um método <strong>PRIVATE</strong> ou <strong>PROTECTED</strong> em uma INTERFACE <br>";
echo "<br><hr>";

echo "<strong>UMA INTERFACE PODE ESTENDER (EXTENDS) OUTRA INTERFACE</strong><br>";


interface Tester extends Animal {
          function tester();
}

class Tuti implements Tester{
          function tester() : string{
                    return "Function tester";
          }
          function respirar() {
                    echo "Respirar vindo de Testes que extends Animal <br>";
          }
}

//instanciar class Tuti 
$tuti = new Tuti;
echo $tuti -> tester() , "<br>";
$tuti -> respirar();
