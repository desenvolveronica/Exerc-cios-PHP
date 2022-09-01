<div class="titulo">Desafio Include/ Require</div>

<?php

include_once('pes.php');

$pess = new Pess;
$n=  $pess -> nome; //herdando pela instância da classe
$i = $pess -> idade;    

echo "Seu nome é {$n} com {$i} anos";

echo "<br><br>";

echo $pess ->funcIdade();
echo $pess ->funcPess();
echo "<br>";