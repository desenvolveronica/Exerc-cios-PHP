<?php

echo "<p style='color:blue'>Carregando:  include_arquivo <br></p>";

$variavel = "Estou definida em escopo global"; //variável definida diretamente dentro do arquivo tem escopo global


if(!function_exists('soma')){
          function soma($a, $b){
                    $result = $a + $b;
                    return "Soma de $a + $b = {$result} <br> ";
          }
}else{
          echo "Function já foi chamada antes <br>";
}
