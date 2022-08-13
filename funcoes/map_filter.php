<div class="titulo">Map & Filter</div>

<?php
echo "Map gera um novo ARRAY do mesmo tamanho após aplicação de transformação(função) <br>";
$notas = [5.8, 4.3, 3.2, 7.9];
$notasFinais1 = [];

echo "Conversão com foreach <br>";
foreach ($notas as $nota){
          $notasFinais1[] = round($nota) ;
}
print_r($notasFinais1);