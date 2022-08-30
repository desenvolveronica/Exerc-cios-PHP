<div class="titulo">Operador Terário</div>

<?php
$idade = 17;
$status;

if($idade >= 18){
    $status = 'Maior de Idade';
}else {
    $status = 'Menor de idade';
}
echo $status ;
$idade = 18;

$status = $idade >= 18 ? 'Maior de Idade' : 'Menor de idade';
echo '<br>';
echo $status . '<br>';