<div class="titulo">Error Handler</div>


<ul>
<p style="color: blue">Error Handler => Gerenciador de erro do PHP </p>
<li>'ini_set('display_errors', 1)' : Exibir erros </li>
<li>'error_reporting(E_ERROR)' : Define o nível de criticidade reportada</li>
<li>'error_reporting(E_ALL)': Exibe todos os erros e advertências</li>
<li>'error_reporting(~E_ALL)' Não exibe nada</li>
</ul>
<?php

ini_set('display_errors', 1); 
error_reporting(E_ERROR); //definindo nível de criticidade
// echo 4 / 0 . "<br>";

error_reporting(E_ALL); //definindo nível de criticidade para todos
// echo 4 / 0 . "<br>";

error_reporting(~E_ALL); //não exibe nenhum erro
// echo 4 / 0 . "<br>";
 

try {
           4 / 0 ;
}catch(DivisionByZeroError $e){
          echo "Divisão por zero <br>";
}
echo "<br><hr>";
error_reporting(E_ALL);
include('arquivo_inexistente.php');
echo "<br>";

echo "stripos() => Localizar a posição da primeira ocorrência de uma string / não case sensitive <br>";

//função responsável por filtrar as mensagens
//se retornar TRUE ela filtra a mensagem 
//se retornar FALSE a mensagem não será filtrada e SERÁ EXIBIDA
function filtrarMensagem($errno, $errstring){
          $text = 'include'; //texto que quero procurar
          return !!stripos(" $errstring", $text); // em ' $errstring'=> está deixando a posição 0 vazia para que 
          //o primeiro caracter comece no índice 1
          //dupla negação para converter em booleano pois pode retornar um inteiro
}
set_error_handler('filtrarMensagem', E_WARNING);

echo "<p><strong style='color: red'>Alerta:</strong>  usando aspas simples o parâmetro ($ errstring) em '!!stripos 
$errstring', a function não reconhece</p><br>";

echo "<hr>";





echo "<br><br>";
echo "<br>Cheguei aqui";