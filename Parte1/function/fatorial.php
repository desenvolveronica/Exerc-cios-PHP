<div class="titulo">Fatorial usando Recursividade</div>

<?php

echo "Fatorial de 7 = ";
function fatorial($numero){
          if($numero === 1) return 1;  //estabelecendo ponto de parada
          return $numero * fatorial($numero - 1);
}

echo fatorial(7) . "<br>";


echo "Fatorial Recursivo <br>";
function novaSoma($numero){

          for($i = 0; $i <= $numero; $i++){
                    return $valor = $numero += novaSoma($numero - 1);
          } return $valor; 
}

echo novaSoma(7);
echo "<hr>";

echo "Novo Fatorial <br>";

function novoFatorial($numero){
          if($numero === 1) return 1;       
          return $numero *= novoFatorial($numero - 1);
}

echo "Fatorial de 5 = " . novoFatorial(5);
