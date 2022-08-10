<div class="titulo">Recursividade</div>

<?php

function somaUmAte($numero){
          $soma = 0;
          for(; $numero >= 1; $numero--){  //neste caso não declara a varoável inicial visto que a mesma virá da chamadaq da function
                    $soma += $numero;
          }
          return $soma;
}
echo somaUmAte(7);