<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b){
          return $a + $b;

}
echo soma(4, 5, 9, 10, 12) . "<br>";  //como a função recebe SOMENTE 2 argumentos ela vai validar somente os 2 primeiros que foram inseridos
echo "";
function somaDeVerdade(...$numeros){  //os ... significam que vai converter o que for recebido em um ARRAY
          $soma = 0;
          foreach($numeros as $num){
                    $soma += $num;
          }
          return $soma;
}
echo somaDeVerdade(4,5,10, 11) . "<br>";
