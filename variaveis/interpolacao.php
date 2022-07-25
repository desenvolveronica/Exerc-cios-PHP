<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo "$numero Usando aspas duplas <br>";
echo '$numero Usando aspas simples <br>';

echo $texto = "Sua nota é $numero <br>";
$objeto = 'caneta';
echo "Eu tenho $numero $objetos <br>"; // neste ponto como coloquei o S junto com $objeto ELE PAROU DE MOSTRAR AI  
echo "Eu tenho $numero {$objeto}s <br>";
echo "Eu tenho {$numero}5 $objeto".'s <br>'; // mesma situação na GAMBI
echo "Eu tinha 5 { $objeto}s, mas perdi 3 {$objeto }s <br>"; //problema com espaço no início da declaração da variável
