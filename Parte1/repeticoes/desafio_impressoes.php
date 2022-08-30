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
echo '<p>Outra forma de fazer (FOREACH)</p><hr>';

foreach($array as $chave => $valor){
          if($chave %2 !== 0) continue;
          // echo" $array[$chave] <br>"; também funciona
          echo "$valor  <br>";

};
