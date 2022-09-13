<?php
namespace Nome\Bem\Grande;

echo 'Estamos no: ' . __NAMESPACE__ . '<br>';

const constante = 'Constante definida no: -> **Nome\Bem\Grande' . '<br>';
function soma($a, $b){
          return $a + $b . " Somando em Nome\Bem\Grande <br>";
}

class Classe {
          public $var = 'Variável em: **Nome\Bem\Grande'; 

          function func(){
                 echo '<br>' . 'Funcão criada no Nome\Bem\Grande: ' . '<br>' .__NAMESPACE__ . '-> ' . __CLASS__ . '-> ' . __METHOD__ . '<br>';  
          }
}