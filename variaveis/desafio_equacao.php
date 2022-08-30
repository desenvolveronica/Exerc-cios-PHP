<div class="titulo">Desafio Equação</div>
<?php

$numA = (6 * (3 + 2)) ** 2 ;
$denA = 3 * 2;
$parteA =  $numA/ $denA;

$numB = (1 - 5) * (2 - 7); 
$denB = 2 ;
$parteB =  ($numB / $denB) ** 2;

$superior = ($parteA - $parteB)** 3 ; 
$inferior = 10 ** 3 ;
$resultado = $superior / $inferior;
echo 'O resultado é ' . $resultado . '<br>';