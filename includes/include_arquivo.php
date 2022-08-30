<?php

echo "Carregando:  include_arquivo <br>";

$variavel = "Estou definida em escopo global <br>"; //variável definida diretamente dentro do arquivo tem escopo global

function soma($a, $b){
          return "Soma de '$a' + '$b' = $a + $b <br>";
}