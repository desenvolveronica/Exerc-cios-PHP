<div class="titulo">Desafio for</div>

<?php

$array =['#', '##', '###', '####', '#####'];

for($i = 0; $i < count($array); $i++){
          echo "$array[$i] <br>";
}
echo '<br>';

$impressao = '';
for($cont = 1 ; $cont <= 5; $cont++){
          $impressao .= '#';
          echo $impressao .'<br>';
}
