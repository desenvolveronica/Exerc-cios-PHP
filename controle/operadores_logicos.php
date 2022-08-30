<div class="titulo">Operadores Lógicos</div>


<?php
echo "<P class='divisao'>Negação Lógica</P> <hr>";
var_dump(true);
echo '<br>';
var_dump(!true);
echo '<br>';

echo '<p class="divisao">Tabela Verdade "AND" (E)</p> <hr>'; 
var_dump(true && true); 
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false && false);
echo '<br>';
var_dump(true and true); 
echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
echo '<br>';
var_dump(false and false);
echo '<br>';

echo '<p class="divisao">Tabela Verdade "OR" (OU) || </p><hr>';
var_dump(true || true); 
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || true);
echo '<br>';
var_dump(false || false);
echo '<br>';

echo '<p class="divisao">Tabela Verdade "XOR" (OU EXCLUSIVO) != </p><hr>';
var_dump(true xor true); 
echo '<br>';
var_dump(true xor false);
echo '<br>';
var_dump(false xor true);
echo '<br>';
var_dump(false xor false);
echo '<br>';
var_dump(true != true); 
echo '<br>';
var_dump(true != false);
echo '<br>';
var_dump(false != true);
echo '<br>';
var_dump(false != false);
echo '<br>';

echo "<p class='divisao'>Exemplos</p><hr>";
$idade = 62;
$sexo = 'F';
$pagouPrevidencia = true;

$podeSeAposentar = $pagouPrevidencia && (($idade >= 60 && $sexo ==='F')||($idade >= 65 && $sexo === 'M'));


if($pagouPrevidencia && $podeSeAposentar){
    echo 'Viva!! pode se aposentar :) <br>';
}else {
    echo 'Trabalhe mais um pouco :( <br>';
}

if($podeSeAposentar){
    echo 'Viva!! pagou previdência, pode se aposentar :) <br>';
}else {
    echo 'Trabalhe mais um pouco :( <br>';
}

if($idade >= 60 && $sexo === 'F'){
    echo "Esta mulher de {$idade} anos, pode se aposentar <br>";
}elseif($idade >= 65 && $sexo === 'M'){
    echo "Este homem de {$idade} anos pode ser aposentar <br>";
}else {
    echo 'Você terá que trabalhar mais ainda <br>';
}
