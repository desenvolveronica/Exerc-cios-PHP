<div class="titulo">Map & Filter</div>

<?php
echo "Map gera um novo ARRAY do mesmo tamanho após aplicação de transformação(função) <br>";
$notas = [5.8, 4.3, 3.2, 7.9];
$notasFinais1 = [];

echo "<br> Conversão com foreach <br>";
foreach ($notas as $nota){
          $notasFinais1[] = round($nota) ;
}
print_r($notasFinais1);
echo "<br>";
echo "<br>Conversão com MAP <br>";

$notasFinais2 = array_map('round', $notas); //espera 2 argumentos dentro de array_map
print_r($notasFinais2);
echo "<br><br><hr>";
echo "Filtrando com FOREACH <br>";

foreach($notas as $nota){
          if($nota >= 7){
                    $apenasAprovados[] = $nota;
          }
}
print_r($apenasAprovados);
echo "<br>";
echo "Filtrando usando FILTER <br>";

function aprovados($nota){
        return $nota >= 7;  //critério de filtro onde vai procurar por quem for TRUE nessa condição
}

$apenasAprovados2 = array_filter($notas, 'aprovados');  //diferente do MAP primeiro passsa o ARRAY

print_r($apenasAprovados2);
echo "<br><br><hr>";
echo "Filtrando com FOREACH <br>";

function calculoLegal($nota){
          $notaFinal = round($nota) + 3;
          return $notaFinal > 10 ? 10 : $notaFinal;
}


$apenasAprovados3 = array_map('calculoLegal', $notas );
print_r($apenasAprovados3);