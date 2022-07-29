<div class="titulo">Operações</div>

<?php
$dados1 = [
          "Nome" => "Verônica",
          "Idade" => 28
];

$dados2 = [
          "Nome" => "Tita",
          "Naturalidade" => "Belo Horizonte",

];
echo '<p class="divisao">Adicionar item do ARRAY (+)</p> <hr>';
//como os dois array tem a chave nome, neste caso o primeiro declarado tem prioridade
$dados3 = $dados1 + $dados2;
print_r($dados3);
echo '<br>';
$dados3 = $dados2 + $dados1;
print_r($dados3);
echo '<br>';

echo is_array($dados3);
echo '<br>';
echo  count($dados3) .'<br>';

$indice = array_rand($dados3); //3
echo "$indice = $dados3[$indice]"; //neste caso coloca na posição uma variável
echo '<br>';
echo "{$dados3['Idade']}"; //semântica muda pois coloca na posição o próprio indice : INTERPOLAÇÃO
echo '<br>';

echo $dados3['Naturalidade'] . '<br>';

echo "${dados3['Nome']}";

echo '<p class="divisao">Remover item do ARRAY (unset)</p> <hr>';
print_r($dados3);
echo '<br>';
unset($dados3["Idade"]);
print_r($dados3);
echo '<br>';
$dados3["Idade"] = 29;
print_r($dados3);
echo '<br>';

$dados3[] = "quarenta";
print_r($dados3);
echo '<br>';
$dados3[] = "oitenta";
print_r($dados3);
echo '<br>';

unset($dados3[0]);
unset($dados3[1]);
print_r($dados3);
echo '<br>';

unset($dados3);
var_dump($dados3);
echo '<br>';

echo '<p class="divisao">Unir itena do ARRAY (merge)</p> <hr>';
//usamos o array_merge pq com o + caso tenha algum valor de indice repetido somente o PRIMEIRO vai prevalecer
$impar = [1, 3, 5, 7, 9];
$par = [0, 2, 4, 6, 8];
$decimais = $impar + $par; 
print_r($decimais);
echo '<br>';

$decimais = array_merge($impar, $par);
print_r($decimais);
echo '<br>';

sort($decimais);
print_r($decimais);  //função SORT ORDENA em ordem
echo '<br>';