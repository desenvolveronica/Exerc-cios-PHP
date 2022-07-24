<div class="titulo">Tipo Boleano</div>

<?php
echo true;
echo '<br>';
echo false . 'O false (zero) não aparece nada';
echo '<br>';
echo var_dump(true) . '<br>';
echo var_dump(false) . '<br>';
echo is_bool(false) . '<br>';
echo is_bool('false'); //neste caso como é string e o resultado é falso, não retorna nada em tela.
//Enquanto o verdadeiro é representado pelo 1 o falso é representado por NADA.
//Lembrando que falso é 0
echo '<h4>Regras de conversão: </h4> <br>';
echo var_dump((bool) 0) . '<br>'; // o único número convertido para FALSE é o 0
echo '<br> <br> <br>';
