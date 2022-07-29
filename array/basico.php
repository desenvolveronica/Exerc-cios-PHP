<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 10.9, 'texto');
var_dump($lista[3]);
echo '<br>';
print_r($lista);  // forma de imprimir o array inteiro
echo '<br>';
echo '<p class="divisao">Imprimindo elemento com print_r($lista[2])</p><hr>';
print_r($lista[2]);
echo '<br> <p class="divisao">Imprimindo toda lista => $lista[?]</p> <hr>';
echo $lista[0] . '<br>';
echo $lista[1] . '<br>';
echo $lista[2] . '<br>';
echo $lista[3] . '<br>';
echo '<p class="divisao">Usando variável $texto como Array e dando posição aos seus elementos(conteúdo dela)</p><hr>';
//esta forma não é boa pq os espaços e acentos contam posição
$texto = 'Texto de teste';
echo var_dump($texto[0]);
echo '<br>';
echo var_dump($texto[1]);
echo '<br>';
echo var_dump($texto[2]);
echo '<br>';
echo var_dump($texto[3]);
echo '<br>';
echo var_dump($texto[4]);
echo '<br>';
echo var_dump($texto);
echo '<br>';

echo mb_substr($texto, 9, 1) . '<br>';

