<div class="titulo">Closure & Callable</div>

<?php
echo "Callable pode ser chamado <br>";
$soma = function($a, $b){
          return $a + $b;
};
echo $soma(4,5) ."<br>";  //$soma é um Callable
echo (is_callable($soma)? 'Sim, soma é um callable': 'Não'). "<br><br>";


$soma1 = 1;
echo $soma1 ."<br>";
echo (is_callable($soma1)? 'Sim, soma1 é um callable': 'Não, desta forma soma1 não é um callable'). "<br><br>";

$soma2 = function($a, $b){
          return $a + $b;
};
echo $soma2(2,3) ."<br>"; 
echo (is_callable($soma2)? 'Sim, soma é um callable': 'Não, desta forma soma não é um callable'). "<br>";

