<div class="titulo">Sessão</div>
<p style='color:blueviolet'> Para usar uma SESSÃO é necessário declarar no início do php</p> 
<?php
session_start();
echo "<ul>
<li>Temos um array associado ao SESSION</li>
<li>Para acessar os elementos da session 'print_r($_session)' pois é um array</li>
<li>O array '$_ session []' é composto de chaves</li>
<li>Session É CASE SENSITIVE</li>
</ul>";

print_r($_SESSION);
echo "<br>";

if(!$_SESSION['nome']){
          $_SESSION['nome'] = 'Diva';
}
