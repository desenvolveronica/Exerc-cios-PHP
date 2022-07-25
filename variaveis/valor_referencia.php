<div class="titulo">Valor VS Referência</div>

<?php
//ATRIBUIÇÃO POR VALOR
$variavel = 'Valor Inicial';
echo "$variavel  <br>"; //podemos fazer assim: echo $variavel . '<br>'
$variavelValor = $variavel;
echo $variavelValor . '<br>';
$variavel = 'novo valor';
echo $variavel . '<br>';
echo" $variavelValor <br>";

//ATRIBUIÇÃO POR REFERÊNCIA
$variavelReferencia = &$variavel;
echo "$variavelReferencia <br>";
echo "$variavel <br>";

$variavel = 'outro';
echo"{$variavel} {$variavelReferencia} <br>";
$variavelReferencia = 'batatinha';
echo"{$variavel} {$variavelReferencia} <br>";