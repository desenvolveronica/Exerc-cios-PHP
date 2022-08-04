<div class="titulo">Foreach</div>

<?php

$array = [1 => 'Domingo', 
          'Segunda', 
          'Terça', 
          'Quarta', 
          'Quinta', 
          'Sexta', 
          'Sábado'];

foreach($array as $dia){
          echo "$dia <br>";
}
echo '<br>';
echo '<hr>';

foreach($array as $indice => $dia){
          echo "{$indice} => {$dia} <br>";
}
echo '<br>';
echo '<hr>';

foreach($array as $valor){
          echo "{$valor} <br>";
}
echo '<br>';
echo '<hr>';

$matrix = [
          ['a', 'e', 'i', 'o', 'u'],
          ['b', 'c', 'd']
];

foreach($matrix as $indice){
          foreach($indice as $valor){
                    echo" $valor  ";
          }echo '<br>';           
}
echo '<br>';
echo '<hr>';

$numeros = [1 => 1, 2, 3, 4, 5];
foreach($numeros as $valor){
          echo "$numeros[$valor] "; // neste caso com deslocamento da primeira posição para 1 o resultado está correto
}
echo '<hr>';
foreach($numeros as $valor){
          echo "$valor "; //neste caso não precisa ter o deslocamento da primeira posição 
}
echo '<br>';
echo '<hr>';

foreach($numeros as $valor){
          $dobrar = $valor * 2;
          echo "$dobrar ";
}
echo '<hr>';

foreach($numeros as &$dobrar){  //ao colocar o & voce acessa o endereço de referência dos valores e consegue mudar $numeros INTERNAMENTE
          $dobrar *= 2;
          echo "$dobrar ";
}
echo "<br>";
echo "<p>O VALOR DA VARIÁVEL FOI ALTERADO POIS O ENDEREÇO(REFERÊNCIA DE MEMÓRIA) DELA FOI ACESSADO COM O (&) </p> <hr>";
// print_r($numeros);
for($i = 1; $i <= count($numeros); $i++ ){
          echo "$numeros[$i] ";
     
}
