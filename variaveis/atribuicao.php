<div class="titulo">Atribuição</div>

<?php
$title = 'Atribuição';
echo $numero = 10 . '<br>';
echo $numero = $numero - 5.1 .'<br>';
$numero = $numero + 10 ;
echo $numero . '<br>';

//DECREMENTO 

// echo $teste = $numero--; não conseguimos colocar uma variável com o -- (para decrementar 1)
$numero-- ;
echo $numero . '<br>'; //necessário fazer o decremento antes de chamar o ECHO

--$numero; 
--$numero; 
$numero--; 
echo $numero . '<br>';

//INCREMENTO 
++$numero;
echo $numero . '<br>';
$numero++;
echo $numero . '<br>';

//ATRIBUIÇAO SUBTRATIVA , ADITIVA , MULTIPLICATIVA , DIVISIVA , MODULO , POTÊNCIA
$numero -=5; //neste caso está retirando 5 unidades do valor
echo $numero . '<br>';
$numero +=5;
echo $numero . '<br>';
$numero = 1 ; //neste caso foi definido que a variável vale 1 
echo $numero . '<br>';
$numero *= 10; //neste ponto numero valia 1 e foi multiplicado o valor antigo por 10
echo $numero . '<br>'; // neste ponto o número vale 10 
$numero /=10;  //neste ponto numero volta a valer 1
echo $numero . '<br>';
$numero *= 100;
echo $numero . '<br>';
$numero %=5; //neste caso o numero que valia 100 foi feito módulo de 5
echo $numero . '<br>';
$numero = 20; 
echo $numero . '<br>';
$numero **= 4;
echo $numero . '<br>';

// setando DEFAULT  | VALOR PARA QUANDO A VARIÁVEL ESTÁ INDISPONÍVEL

// echo $variavelA = 'texto variavel A  <br>';
var_dump($variavelA);
echo '<br>';
echo $valor = $variavelA ?? 'valor default' . '<br>'; //neste caso como a variavelA não existe ele usa o 'valor default'


