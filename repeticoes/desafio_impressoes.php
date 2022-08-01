<div class="titulo">Desafio Impressões</div>
<?php
$array = [
          'AAA',
          'BBB',
          'CCC',
          'DDD',
          'EEE',
          'FFF'
];
print_r($array);
echo '<br>';

for($indice = 0; $indice < $array[$indice]; $indice++){
          if($indice %2 === 1) {continue;}
          else {echo $array[$indice] . '<br>';}        
};
