<div class="titulo"></div>

<?php
echo 'Eu sou uma string aspas simples <br>';
echo "Eu sou aspas duplas <br>";
var_dump("Aspas duplas");
echo '<br>';
var_dump('Aspas simples');
echo '<br>';
//concatenação

echo 'Esta estring'. ' '.'se junta com esta outra';
print('<br>Também existe a função PRINT usando parênteses');
print'<br>Também existe a função PRINT sem parênteses';
print '<br>';

//Algumas Funções

echo '<br>' . strtoupper('ola minusculo') . ' se coloca acento ele muda de maiúsculo pra minúsculo(dentro do strtoupper())';
echo '<br>' . strtolower('OLA MAIUSCULO ');
echo '<br>' . ucfirst('parecido com capitalise');
echo '<br>' . ucwords('primeiras letras em  maiusculo');
echo '<br> quantas letras tem ola ? ' . strlen('olá');
echo '<br> quantas letras tem olá => usando mb_ que nao conta o caracter especial (acento)? ' . mb_strlen('olá');
echo '<br> substring pega uma parte =>' . substr('Só uma parte mesmo', 7, 6);
echo '<br>' . str_replace('isso', 'aquilo', 'trocado isso');
echo '<br><br>';