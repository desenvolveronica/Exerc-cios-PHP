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
?>
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