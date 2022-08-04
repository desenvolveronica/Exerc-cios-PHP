<div class="titulo">Laço FOR</div>

<?php
 for($cont = 1; $cont <= 5; $cont++) echo "Contador = $cont <br>";

 echo '<hr>';

 for(; $cont <= 10;){
          echo "Contador = $cont <br>";
          $cont++;
 }

 echo '<hr>';

 for(;;){
          echo " Contador = $cont <br>";
          $cont++;
          if($cont <=15){
                    continue;
          }else{
                    break;
          }
          
 }
 echo "<hr>";

 $array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
 print_r($array);
 echo '<hr>';

 for($i = 1; $i <= $array[$i]; $i++){
          echo "{$i} => {$array[$i]} <br>";
 }
 echo "<br> Outra forma <hr>";
 for($i =1; $i <= count($array); $i++){
          echo "$i => $array[$i] <br>";
 }

echo "<hr>";
$matrix = [
                    ['a', 'e', 'i', 'o', 'u'],
                    ['b', 'c', 'd']
          ];

          //primeiro for pega as linhas e o segundo for pega as colunas
for($i = 0; $i < count($matrix); $i++){
          for($j = 0; $j < count($matrix[$i]); $j++){
                    echo "{$matrix[$i][$j]} ";
          }echo '<br>';
}

echo "<br>";

$carros =['Uno', 'Corsa', 'Palio'];
for($i=0; $i < count($carros); $i++){
          echo "$carros[$i] <br>";
}
echo '<hr>';