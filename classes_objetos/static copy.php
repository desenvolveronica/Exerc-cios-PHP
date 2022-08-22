<div class="titulo">Membros Estáticos</div>

<?php
echo "***MEMBROS DE CLASSE <br>";
echo "Podem ser <strong>DINÂMICOS</strong> ou <strong>ESTÁTICOS</strong>";

class Tester{

          public $membroDinamico = "Variável de instância"; //variável de instância só podemos acessar com uma INSTÂNCIA
          public static $membroStatico = "Variável de classe"; //só conseguimos acessar diretamente a partir da chamada da classe
          //tester::$membroStatico

}

echo "<br>Ex:1 " . Tester::$membroStatico ."<br>";





echo "<br><br>";
echo "Cheguei aqui <br>";