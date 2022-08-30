<div class="titulo">Desafio FOR</div>

<?php

$teste = ['#', '##', '###', '####', '#####'];
print_r($teste);
echo '<br>';

for($i = 0; $i < count($teste); $i ++){
          echo $teste[$i] . '<br>';
};
echo '<hr>';
$impressao = '';
for($cont = 1; $cont <= 5; $cont ++){
          $impressao .= '#';
          echo $impressao .'<br>';
};
echo '<hr>';
 for($impressao2 = '#'; $impressao2 != '######'; $impressao2 .= '#'){
          echo $impressao2 . '<br>';
 };



