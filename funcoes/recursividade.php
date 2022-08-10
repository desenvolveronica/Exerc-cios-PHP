<div class="titulo">Recursividade</div>

<?php

function somaUmAte($numero){
          $soma = 0;
          for(; $numero >= 1; $numero--){  //neste caso não declara a varoável inicial visto que a mesma virá da chamadaq da function
                    $soma += $numero;
          }
          return $soma;
}
echo somaUmAte(7) . "<br>";

function outraSomaUmAte($numero){
          $soma = 0;
          for($i = 1; $i <= $numero; $i++){  //neste caso não declara a varoável inicial visto que a mesma virá da chamadaq da function
                    $soma += $i;
          }
          return $soma;
}

echo outraSomaUmAte(7) . "<br>";

echo "Função recursiva consiste em ter um PONTO DE PARADA e da mesma função sendo quebrada EM PROBLEMAS MENORES <br>";
function somaRecursivaUmAte($numero){
          //condição de parada
          if($numero === 1){
                    return 1;
          } return $numero + somaRecursivaUmAte($numero - 1);
}
echo somaRecursivaUmAte(7) . "<br>";

function somaRecursivaEconomica($numero){
          return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}
echo somaRecursivaEconomica(7) . "<br>";