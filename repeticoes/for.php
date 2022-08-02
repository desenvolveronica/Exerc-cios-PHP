<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <=5; $cont++){
          echo $cont . '<br>';
};
echo '<br>';
echo 'Sai do laço quando o valor não é mais atendido pela condição<br>';
echo 'Valor = ' . $cont . '<br> <hr>';
FOR(; $cont <=10; $cont++){
          echo $cont . '<br>';
}
echo '<br> Neste ponto o contator vale 11 <br>';
echo $cont . '<br> <hr>';

for(; $cont <=15 ;){
          echo "$cont  <br>";
          $cont++;
}

$array = [ 1 => 'Domingo','Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];
echo '<br>Percorrendo ARRAY<br><hr>';
print_r($array);
echo '<br>';
for($i = 0; $i < count($array) ; $i ++ ){
          echo "{$array[$i]} <br>";

}
echo '<br>Percorrendo MATRIX<br><hr>';
$matrix = [
          ['a', 'e', 'i', 'o', 'u'],
          ['b', 'c', 'd'],
];
print_r($matrix);
echo '<br><hr>';


for($i = 0; $i < count($matrix); $i++){
          print_r($matrix[$i]) ;
          echo'<br>';
}
echo '<br>For dentro do outro para percorrer a MATRIX<br><hr>';       
for($i = 0; $i < count($matrix); $i++){
          for($j = 0; $j < count($matrix[$i]); $j ++){
                    echo "{$matrix[$i][$j]}  ";
          };
          echo '<br>';
}