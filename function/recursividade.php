<div class="titulo">Recursividade</div>

<?php

echo "Para ter recursividade é preciso: <br>";
echo "1) Condição de parada <br>";
echo "2) A Função chamar ela mesma <br>";
echo "<hr>";

echo "Exemplo 1 <br>";
echo "**Soma de determinado número até 1 <br>";

function somaTodos($numero){
          $valor = 0; //se não estartar esta variável ela dá erro de undefined
          for($i = 0; $i <= $numero; $i ++){
                    $valor += $i;
          }return $valor;
}

echo somaTodos(7);
echo "<hr>";

function somaRecursiva($numero){
          if($numero ===1)return 1; //determina o ponto de parada
          return $numero + somaRecursiva($numero - 1); //cada vez que chegar neste ponto o número decrementa 1 
}
echo "Solução usando recursividade <br>";
echo somaRecursiva(7);
echo "<hr>";
echo "**Exemplo 2 <br>";

$soma = function($a, $b){  //variável atribuida a uma função anônima
          return $a + $b;
};

echo $soma(4,5) . "<br>";

function exibindo($a, $b, $op, $funcao){  //esta function  na verdade é uma variável ao qual está atribuindo a função
          $resultado =  $funcao($a,$b) ?? 'nada';
          echo "<span>Resultado $a $op $b = $resultado</span>";
}

echo exibindo(3, 5, '+', $soma);