<div class="titulo">Fatorial usando Recursividade</div>

<?php

echo "Fatorial de 7 = ";
function fatorial($numero){
          if($numero === 1) return 1;  //estabelecendo ponto de parada
          return $numero * fatorial($numero - 1);
}

echo fatorial(7) . "<br>";