<div class="titulo">Variáveis</div>

<?php
$numA = 13 ;
echo $numA . '<br>';
echo var_dump($numA) . '<br>';
$a = 10 ;
$b = 20;
$soma = $a + $b;
echo $soma , '<br>';

echo isset($soma) . '<br>';
if(isset($soma)){
    echo 'sim, está setado <br>';
}else{
    echo 'Não está setado <br>';
};

var_dump($soma) . '<br>';

var_dump($_SERVER["HTTP_HOST"]) . '<br>';