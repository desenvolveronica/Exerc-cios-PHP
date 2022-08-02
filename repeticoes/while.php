<div class="titulo">While/ Do While</div>

<?php
echo '<p>Usando WHILE</P><hr>';
const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE){
          echo "while $contador <br>";
          $contador++;
};
echo "<br> Neste ponto o contador vale $contador";

echo '<p>Usando DO WHILE</p><hr>';


do {  echo "while $contador <br>";
$contador++;}while($contador < VALOR_LIMITE);
