<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = "Senhor(a)", $sobrenome = "cliente"){
          return "Seja bem vindo(a), $nome $sobrenome<br>";  // neste caso o argumento padrão vai aplicar um valor caso o parâmeto não seja passado na função
}
echo saudacao() . "<br>"; // exibe no echo os valores padões
echo saudacao("Verônica", "Diva") . "<br>"; // exibe na tela os parâmetros recebidos
echo saudacao(null, "Tona") . "<br>"; // Como o primeiro parâmetro é nulo NÃO vai aparecer nada para ele e toma para o segundo parâmetro