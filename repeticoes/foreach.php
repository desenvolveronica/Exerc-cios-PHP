<div class="titulo">ForEach</div>

<?php
echo '<p>Usado quando vamos percorrer por todos os elementos de forma padrão</p><hr>';
$array = [ 1 => 'Domingo',
          'Segunda', 
          'Terça', 
          'Quarta', 
          'Quinta', 
          'Sexta', 
          'Sabado'];
foreach( $array as $valor ){
          echo $valor . '<br>' ;
};
echo '<p>Outro exemplo</p><hr>';

foreach($array as $indice => $valor){
          echo " {$indice} => {$valor} <br>";
};