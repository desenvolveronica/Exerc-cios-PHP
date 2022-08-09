<div class="titulo">Funções Anônimas</div>

<?php
$soma = function($a, $b){
          return $a + $b;
};  // termina com ; pois temos uma sentença de código


function executar($a, $b, $op, $funcao){
          $resultado = $funcao($a, $b);
          echo "<span>Resultado $a $op $b = $resultado</span>";
}

executar(5,6,'+', $soma);
echo "<br>";

$multiplicar = function($a , $b){
          return $a * $b;
};

executar(10, 6, '*' , $multiplicar);