<?php

echo "Carregando: include_once_arquivo ... <br>";
echo $variavelGlobal = "Estou definida globalmente <br>";


function soma($a, $b){
          $resultado = $a + $b;
          return "A soma de $a e $b é = $resultado";
}

// if(!function_exists('soma')){
//           function soma($a, $b){
//                     $resultado = $a + $b;
//                     return "A soma de $a e $b é = $resultado";
//           }
          
// }else{
//           echo "Function já foi passada";
// }
