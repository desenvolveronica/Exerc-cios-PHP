<div class="titulo">Closure & Callable</div>

<?php
echo "Callable pode ser chamado <br>";
$soma = function($a, $b){
          return $a + $b;
};
echo $soma(4,5) ."<br><br>";  //$soma é um Callable
echo (is_callable($soma)? 'Sim, soma é um callable': 'Não'). "<br>";
$soma = 1;
echo (is_callable($soma)? 'Sim, soma é um callable': 'Não, desta forma soma não é um callable'). "<br>";
