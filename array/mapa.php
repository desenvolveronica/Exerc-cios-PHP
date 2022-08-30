<div class="titulo">Mapa</div>

<?php

$lista = array(1, 2, 3, 9.8, 'texto');
$dados = array(
          'idade' => 25,
          'cor' => "verde",
          'peso' => 49.8
);
print_r($dados);
echo '<br>';
echo 'print_r($dados["peso"]): ';
print_r($dados['peso']);
echo '<br>';
print_r($dados["peso"]);
echo '<br>';
print_r($dados["cor"]);
echo '<br>';
print_r($dados["idade"]);
echo '<br>';

echo '<p class="divisao">Adicionar otem no Array</p><bh><hr>';
$novaLista = array('a', 'cor' => 'red', 8 => 'b', 'novo');
print_r($novaLista);
echo '<br>';

$novaLista[]= 'teste';
print_r($novaLista);
echo '<br>';
$novaLista['vinte'] = 'j';
print_r($novaLista['vinte']);
echo '<br>';
print_r($novaLista);
echo '<br>';

// $novaLista[false] = 'Tentei indexar com false';
// print_r($novaLista[false]); //abtigo índex 0 que era o a SUMIU
// echo '<br>';  
// print_r($novaLista);
// echo '<br>';
// $novaLista[true] = 'Tentei indexar com true';
// print_r($novaLista[true]); 
// echo '<br>';  
// print_r($novaLista);
// echo '<br>';
