<div class="titulo">Funções Anônimas</div>

<?php
$soma = function($a, $b){
          return $a + $b;
};  // termina com ; pois temos uma sentença de código


function executar($a, $b, $op, $funcao){
          $resultado = $funcao($a, $b) ?? 'nada';
          echo "<span>Resultado $a $op $b = $resultado</span>";
}

executar(5,6,'+', $soma);
echo "<br>";

$multiplicar = function($a , $b){
          return $a * $b;
};

executar(10, 6, '*' , $multiplicar);

echo "<br>";
$divisao = function($a, $b){
          //return $a / $b; //se não tiver retorno pode ser colocado um valor default na função que chama ela ou seja: executar
};
executar(2, '3', '/', $divisao);
echo "<br>";

echo 10 < 7 ? 'sim': 'nao';

