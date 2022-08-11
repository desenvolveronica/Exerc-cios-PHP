<div class="titulo">Recursividade</div>

<?php

echo "Para ter recursividade é preciso: <br>";
echo "1) Condição de parada <br>";
echo "2) A Função chamar ela mesma <br>";
echo "<hr>";

echo "Exemplo 1 <br>";
echo "**Soma de determinado número até 1 <br>";

function soma($numero){
          $valor = 0; //se não estartar esta variável ela dá erro de undefined
          for($i = 0; $i <= $numero; $i ++){
                    $valor += $i;
          }return $valor;
}

echo soma(7);
echo "<hr><br>";

function somaRecursiva($numero){
          if($numero ===1)return 1;
          return $numero + somaRecursiva($numero - 1);
}
echo "Solução usando recursividade";
echo somaRecursiva(7);