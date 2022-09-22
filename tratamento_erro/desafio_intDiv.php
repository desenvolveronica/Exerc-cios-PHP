<?php namespace DESAFIO; ?>
<div class="titulo">Desafio IntDiv</div>

<?php
echo "O namespace é a primeira declaração em um arquivo PHP, mesmo antes do HTML <br>";
echo __NAMESPACE__ . '<br><br><hr>';

class Desafiante {
          function intdiv($a, $b){
                 return $a + $b;
          }
}

$Desafiante = new Desafiante;
echo $Desafiante -> intdiv(8 , 2);

echo "<br> Original usndo a API =>  8/3: " . intdiv(8 , 3);