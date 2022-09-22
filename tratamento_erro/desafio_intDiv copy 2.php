<?php namespace DESAFIO;

use DivisionByZeroError;

 ?>
<div class="titulo">Desafio IntDiv</div>

<?php
echo "O namespace é a primeira declaração em um arquivo PHP, mesmo antes do HTML <br>";
echo __NAMESPACE__ . '<br><br><hr>';

class Desafiante {
          function intdiv($a, $b){
                 try {
                     return intdiv($a, $b) . '<br>';
                 } catch (DivisionByZeroError $e){
                     echo "Divisão por zero <br>";
                 } 
          }
}

$Desafiante = new Desafiante;
echo $Desafiante -> intdiv(8 , 2);
echo $Desafiante -> intdiv(8 , 3);
echo $Desafiante -> intdiv(8 , 0);

echo "<br> Original usndo a API =>  8/3: " . intdiv(8 , 3);