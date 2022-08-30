<div class="titulo">Tipo Float</div>

<?php
echo 1.1 , '<br>';
var_dump(1.0);
echo '<br>';
echo PHP_FLOAT_MAX , '<br>';
echo PHP_FLOAT_MIN, '<br>';
echo 1.2e3 , '<br>'; // (e) <=  seria x10 |pode ser representado como maiúsculo e minúsculo e significa quantas casas a vírgula vai andar (3)
//resultado esperado 1200
echo 13E-3 , '<br>'; // (E) <=  seria x10 |que pode ser representado em minúsculo significa quantas casas a vírgula vai andar.
//neste caso como está com -3 o resultado esperado é 0.013
echo '<br>';
echo '<br>';
