<div class="titulo">Desafio índex</div>

<?php
$lista = array(
          1,
          4 => 2,
          3 => 3,
          5,
          '9' => 6,
          '06' => 7,
          0 => 8
);

print_r($lista);
//RESULTADO         
// Array ([0]=>8, [4]=> 2, [3]=> 3, [5]=> 5, [9]=> 6, [06]=> 7);