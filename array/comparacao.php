<div class="titulo">Comparação Arrays</div>

<?php
$arra1 = ['nome' => 'Tita', 'idade' => 20];
print_r($arra1);
echo '<br>';
$arra1['nacionalidade'] = 'SC';
print_r($arra1);
echo '<br>';
unset($arra1['nacionalidade']);
print_r($arra1);
echo '<br>';

echo '<p class="divisao">COMPARAÇÃO</p><hr>';
$arra1 = ['nome' => 'Tita', 'idade' => 20];
$arra2 = ['nome' => 'Tita', 'idade' => 20];

var_dump($arra1 == $arra2);
echo '<br>';
$arra3 = ["idade" => 20, 'nome' => 'Tita'];
var_dump($arra1 == $arra3); //neste caso retorna TRUE pois os arrays possuem os mesmos valores
echo '<br>';
var_dump($arra1 === $arra3); //como este precisa ser INDÊNTICO retorna FALSE pois a ordem não está igual

$arra4 = ["idade" => '20', 'nome' => 'Tita'];
echo '<br>';
var_dump($arra1 == $arra4); //true
echo '<br>';
var_dump($arra1 === $arra4); //false
echo '<br>';