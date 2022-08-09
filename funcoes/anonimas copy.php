<div class="titulo">Funções Anônimas</div>

<?php
$soma = function($a, $b){
          echo "<span>Somando $a + $b = </span>";
          return $a + $b;
};

echo $soma(4, 5) ."<br>";