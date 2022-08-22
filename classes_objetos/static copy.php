<div class="titulo">Membros Estáticos</div>

<?php
echo "***MEMBROS DE CLASSE <br>";
echo "Podem ser <strong>DINÂMICOS</strong> ou <strong>ESTÁTICOS</strong>";
echo "<br>";

class Tester{

          public $membroDinamico = "Variável de instância"; //variável de instância só podemos acessar com uma INSTÂNCIA
          public static $membroStatico = "Variável de classe"; //só conseguimos acessar diretamente a partir da chamada da classe
          //tester::$membroStatico

          public function mostraTester(){
                    echo "<br>";
                    echo "Variável dinâmica: {$this->membroDinamico}<br>";
                    echo "Variável estática: " . self::$membroStatico ."<br>";

          }

          public static function mostarStaticTester(){
                    echo "<br>";
                    echo "Variável estática: " . self::$membroStatico ."<br>";

          }

}
echo "<strong>THIS representa a instância atual </strong><br>";
echo "<br>Ex:1 <br>" . Tester::$membroStatico ."<br>"; //neste caso SELF não funciona pois não estou no escopo da classe
echo "obs: Para acessar um membro estático(de classe) quando fora do escopo da classe é preciso chamar a mesma e usar os :: <br>";
echo "<br>";


$tester = new Tester;
echo 'EX:2 ' ,  $tester->mostraTester();
echo "obs: Para chamar uma função pública e dinâmica é preciso instanciar uma objeto para tal <br>";

echo "<br>";
echo '<br> EX:3 ' ,  $tester->mostarStaticTester();
echo "Acessando uma função estática diretamente de uma INSTÂNCIA <br>";
echo "Em uma function STATIC, ou seja, para uso de classe NÃO é possível acessar um membro dinâmico, ou seja, para objeto<br>";


echo "<br>";
echo '<br> EX:4 ' ,  Tester::mostarStaticTester();
echo "Acessando uma função estática diretamente da CLASSE <br>";
echo "Como não estamos neste ponto dentro do escopo da classe É crucial chama-la, ou seja, Tester:: function estatic";





echo "<br><br>";
echo "Cheguei aqui <br>";

