<div class="titulo">Desafio Tabela</div>

<?php 
$array = [
          [1, 2, 3, 4, 5],
          [6, 7, 8, 9, 10],
          [11, 12, 13, 14, 15],
          [16, 17, 18, 19, 20]
];

foreach($array as $linha){
          foreach($linha as $valor){
                    echo "$valor ";
          }echo "<br>";


}//não usa (;) no foreach
echo '<p>Quando temos uma MATRIX ou ARRAY é acertivo usar um FOREACH DENTRO  do outro</p>';

?>
<table>
          <?php
                    foreach($array as $linha){
                              echo '<tr>';
                              foreach($linha as $valor){
                                        echo "<td>$valor</td>";

                              }echo '</tr>';
                    }
    
          ?>
</table>
<br>
   
<table>
          <?php

                    foreach($array as $indice => $linha){
                           $style = $indice %2 === 1 ? 'background-color: lightblue;' : '';
                           echo "<tr style = '{$style}'>";
                           foreach($linha as $valor){
                              echo "<td>$valor</td>";

                           }echo '</tr>';
                    }
          ?>
</table>   


<style>
          table {
                    border: solid 1px #444;
                    border-collapse: collapse;
                    margin: 20px 0;
          }
          table tr {
                    border: solid 1px #444;
          }
          table td {
                    padding: 10px 20px;
                    
                    
          }
</style>