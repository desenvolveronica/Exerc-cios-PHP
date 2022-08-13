<div class="titulo">Desafio Recursividade</div>

<?php

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10]; 

function imprimir($array, $nivel = '>'){ //neste ponto $nivel recebe um valor default
          foreach($array as $elemento){  //$array simboliza a POSIÇÃO e $elemento o próprio valor
                    if(is_array($elemento)){ //condição para saber se temos array CONDIÇÃO DE PARADA
                              imprimir($elemento, $nivel . $nivel[0]); // PRIMEIRO CARACTER por isso [0]
                    }else {
                              echo "$nivel $elemento <br>";
                    }
          }
}
imprimir($array);
echo "<br>";

//imprimir($elemento, $nivel . $nivel[0]) => pega o nível ATUAL e concatena com o PRIMEIRO por isso [0]