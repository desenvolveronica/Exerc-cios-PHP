<div class="titulo">Operadores Relacionais</div>
<?php
var_dump(1 == "1"); //r:true
echo '<br>';
var_dump(1 <> 10);  //DIFERENTE <> USADO EM SQL r:true
echo '<br>';
var_dump(1 != 1); //!= DIFERENTE TAMBÉM r:false
echo '<br>';
var_dump(10 === '10'); //estritamente iguais (compara o tipo também) r:false
echo '<br>';
var_dump(10 != '10'); //r:false
echo '<br>';
var_dump(10 !== '10'); //estritamente diferentes (compara o tipo também) r:true
echo '<br>';

echo '<p>Usando relacionais no IF e ELSE</p> <br>';
$idade = 25;
if ($idade < 10) {
    echo "Idade é {$idade} que é menor que 10 <br>";
} else {
    echo "Idade é {$idade} que é maior que 10 <br>";
}

if ($idade < 18) echo 'Menor de idade <br>';
else echo 'Maior de idade <br>';
