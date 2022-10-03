<div class="titulo">Error Handler</div>


<ul>
<p style="color: blue">Error Handler => Gerenciador de erro do PHP </p>
<li>'ini_set('display_errors', 1)' : Exibir erros </li>
<li>'error_reporting(E_ERROR)' : Define o nível de criticidade reportada</li>
<li>'error_reporting(E_ALL)': Exibe todos os erros e advertências</li>
</ul>
<?php

ini_set('display_errors', 1); 
error_reporting(E_ERROR); //definindo nível de criticidade
// echo 4 / 0 . "<br>";

try {
           4 / 0 ;
}catch(DivisionByZeroError $e){
          echo "Divisão por zero <br>";
}


echo "Cheguei aqui";