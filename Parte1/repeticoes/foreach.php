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


echo '<p>Percorrer MATRIX usando FOREACH</p><hr>';
$matrix = [
          ['a', 'e', 'i', 'o', 'u'],
          ['b', 'c', 'd'],
];

foreach($matrix as $linha){
         print_r($linha);
         echo '<br>';
};
echo '<hr>';
foreach( $matrix as $linha){
          foreach($linha as $valor){
                    echo "$valor ";
          };
          echo '<br>';
};
echo '<p>Valor e Referência</p><hr>';
$numeros = [1, 2, 3, 4, 5];
print_r($numeros);
echo '<br>';
echo '<p>Usando o &(representa referência de memória) para alterar a referência dos valores do ARRQAY</p><hr>';
foreach($numeros as &$dobrar){      //USA O & PARA PEGAR O ENDEREÇO para poder alterar o valor do ARRAY
         $dobrar *=2;
         echo "$dobrar <br>";
};
echo '<br>';
print_r($numeros);
echo '<br>';
foreach($numeros as $indice => $valor){
          echo "$indice = $valor <br>";
};