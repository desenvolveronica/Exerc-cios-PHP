<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b){
          return $a + $b;

}
echo soma(4, 5, 9, 10, 12) . "<br>";  //como a função recebe SOMENTE 2 argumentos ela vai validar somente os 2 primeiros que foram inseridos
echo "Neste caso a function usa o ...**Argumentos variáveis** (que transforma os parÂmetros recebidos em um ARRAY) .<br><hr>";
function somaDeVerdade(...$numeros){  //os ... significam que vai converter o que for recebido em um ARRAY
          // print_r($numeros); neste caso a resposta é um array contendo outrro array quando ele recebe o somaDeVerdade($array)
          $soma = 0;
          foreach($numeros as $num){
                    $soma += $num;
          }
          return $soma;
}
echo somaDeVerdade(4,5,10, 11) . " => Usamos um foreach para obter o resultado que é a soma de uma Array<br>";
echo "Utilizando um Array <br>";
$array = [6, 7, 8];
echo(somaDeVerdade(...$array)). " => Importante ressaltar que é necessário passar o ...$array para desmenbrar o array<br>"; 

