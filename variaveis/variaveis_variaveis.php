<div class="titulo">Variáveis variáveis</div>

<?php
$a = 'ValorA';
echo "$a <br>";
$$a = 'ValorAA';
echo "$$a <br>"; // este caso aparece o $
echo "{$$a} <br>"; //para interpretar o dólar $ 2x precisa colocar as chaves {$$a}
echo "$ValorA <br>";

$epa = 'opa';
$opa = 'vish';
echo "$epa {$opa} <br>";
$vish = 'eitaaa!!';
echo "{$$epa} {$$$epa} <br>";