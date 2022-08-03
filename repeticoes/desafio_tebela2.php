<div class="titulo">Desafio Tabela #2</div>

<form action="#" method="post">
   <div>
      <label for="linhas">Linhas</label>
      <input style = "widTH: 100px" type="number" name="linhas" id="linhas" value=<?= $_POST['linhas'] ?? 5 ?>   > 
      
   </div>
   <div>
      <label for="colunas">Colunas</label>
      <input style = "width: 100px" type="number" name="colunas" id="colunas" value=<?=  $_POST['colunas'] ?? 5 ?>    >
   </div>
      <button style ='background-color: lightgreen'>Gerar Tabela</button>
</form>


<table>
   <?php

      $num = 1;
      $linhas = intval($_POST['linhas']); 
      $colunas = intval($_POST['colunas']);

      if(!$linhas) $linhas = 5;
      if(!$colunas) $colunas = 5;

      for( $i = 0 ; $i < $linhas; $i++){
         $style = $i %2 === 0 ? $style = "background-color: pink" : "background-color: lightblue  ";
         echo "<tr style = '{$style}'>";
         for( $j = 0 ; $j < $colunas; $j++){
            echo "<td>$num</td>";
            $num++;
         }
         echo '</tr>';
      };
   ?>
</table>

<style>

         
         form * {
            font-size: 1.8rem;
         }
         form > div {
            margin-bottom: 10px;
         }
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