<div class="titulo">Sessão</div>
<p style='color:blueviolet'> Para usar uma SESSÃO é necessário declarar no início do php</p> 
<?php
session_start();
echo "<ul>
<li>Usando 'session_start()'</li>
<li>Temos um array associado ao SESSION</li>
<li>Para acessar os elementos da session 'print_r($_session)' pois é um array</li>
<li>O <b>array</b> '$_ session []' é composto de chaves</li>
<li>Session É CASE SENSITIVE</li>
<li>Os valores das chaves é salvo no</li>
</ul>";

print_r($_SESSION);
echo "<br>";

if(!$_SESSION['nome']){
          $_SESSION['nome'] = 'Diva';
}

if(!$_SESSION['email']){
          $_SESSION['email'] = 'diva@novelesca.com';

}

?>

<p>
   <a href="/sessao/basico_sessao_alterar.php" style="color: blueviolet" >Alterar Sessão</a>
</p>
