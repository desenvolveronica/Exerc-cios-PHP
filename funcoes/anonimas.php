<div class="titulo">Funções Anônimas</div>

<?php
echo "Variável que recebe o NOME de uma função (em função anônima coloca a variável recebendo a function) <br>";
$soma1 = function($a, $b){
          echo "<span>Somando $a + $b = </span>";
          return $a + $b;
};
$soma = function($a, $b){
          echo "<span>Somando </span>";
          return $a + $b;
};  //neste caso precisa de colocar o (;) pois ela  é uma setença de código diferente de uma declaração de função

echo $soma1(1,2) . "<br><br>";
echo "Função recebendo outra como parâmetro <br><hr>";
function executar($a, $b, $op, $function){
          $resultado = $function($a, $b) ?? 'Nada';  //usando valor default com ?? 
          echo "$a $op $b = $resultado <br>";
}

executar(2, 3, '+', $soma);
$multiplicacao = function($a, $b){
          // echo "$a * $b = ";
          return $a * $b;
};
echo $multiplicacao(4, 5);
echo "<br> Outra forma <br>";
executar(4, 5, '*', $multiplicacao);
echo "<br> ";
$divisao = function($a, $b){
          // return $a / $b; se não tiver retorno pode ser colocado um valor default na função que chama ela ou seja: executar
};
executar(2, 3, '/', $divisao);
