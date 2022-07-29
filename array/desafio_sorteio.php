<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = ["Elza", "Rapunzel", "Brance de Neve", "Cinderela"];
print_r($nomes);
echo '<br>';
$resultado = array_rand($nomes); // array_rand pega o índice
var_dump($resultado); //sendo feito o sorteio do índice
echo '<br>';
echo "<h1><center>A princesa escolhida foi : $nomes[$resultado]</center></h1> <br>";
echo "<div center><h1>A princesa escolhida foi : $nomes[$resultado]</h1></div> <br>";

?>
<style>
          [center]{
                  color: purple;
                  display: flex;
                  justify-content: center;
          }
</style>