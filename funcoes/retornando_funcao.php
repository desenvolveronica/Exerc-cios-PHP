<div class="titulo">Retornando Função</div>

<?php

echo "Função que chama outra função no retorno <br>";
echo "Para usar algum parâmetro dentro da função mais interna É NECESSÁRIO coloca-lo dentro de use(parâmetro que quer usar) após o return da 2 função <br>";
function soma($a){
          return function($b) use ($a) { //função anônima
                    return $a + $b;
          }; //coloca o ; pois se trata de uma sentença de código (função anônima)
}

echo soma(3)(3) . "<br>";   //como soma retorna uma outra função, passamos o parâmetro desta outra função $b => VALOR DE $b
//a prior será exibido o valor de $b visto que $a AINDA NAO ESTÁ DISPONÍVEL
