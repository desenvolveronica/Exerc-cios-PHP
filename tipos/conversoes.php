<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX) . '<br>';
echo var_dump(PHP_INT_MAX + 1) . '<br>';
echo var_dump(PHP_INT_MAX - 1) . '<br>';
echo var_dump(1 + 1.0) . '<br>';
echo '<p>Conversão expicita</p>';
echo var_dump((int) 3.14) . '<br>'; //conversão explicita
echo var_dump((int) 2.9999) . '<br>';
echo var_dump((float)2.9999) . '<br>';
echo var_dump((float) 4) . '<br>'; //este viraria 4.0 após a conversão
echo '<p>intval retorna o valor inteiro da variável</p>';
echo var_dump(intval(5.8 , 10)) . '<br>';
echo var_dump(round(7.949484)) . '<br>';
echo var_dump((int) round(4.9));
echo '<p>Convrsão com String</p> <br>';
echo var_dump(3 + '2'). '<br>';
print var_dump('3' . 2) . '<br>';
echo var_dump('2' . 6 . '4') . '<br>';
echo var_dump((int)'2' . 5) . '<br>'; //neste caso virou str mesmo com a conversão explicita
// quando usamos uma concatenação o resultado é string
echo is_string('2' . 5) . '<br>';
// print is_string('2' + 5) . '<br>'; //este nao aparece nada na tela pois é falso
echo var_dump((int) 9.9) . '<br>';
echo var_dump((float) '10.5') . '<br>'; 