<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = "senhor(a)", $sobrenome = "cliente"){
          return "Seja bem vindo(a), $nome $sobrenome!";  // neste caso o argumento padrão vai aplicar um valor caso o parâmeto não seja passado na função
}
echo saudacao() . "<br>"; // exibe no echo os valores padões
echo saudacao("Verônica", "Diva") . "<br>"; // exibe na tela os parâmetros recebidos
echo saudacao(null, "Tona") . "<br>"; // Como o primeiro parâmetro é nulo NÃO vai aparecer nada para ele e toma para o segundo parâmetro
echo saudacao(null, null) . "<br><br>"; // como os 2 são nulos nao aparece nada para esses parâmetros e a frase fica sendo somente o restante 
//já definido:   Seja bem vindo(a)!,
echo "<hr>";

function anotqarPedido($comida, $bebida = 'Água'){
          echo "Para comer: $comida <br>";
          echo "Para beber: $bebida <br>";
}
anotqarPedido("Queijo", "Leite");
echo "<br>";
anotqarPedido(""); // neste caso a variável comida aparece vazio e o bebida para o valor padrão
echo "<br>";
echo "Color o valor padrão por último se não vai ter que SEMPRE declarar os 2 e o padrão não vai ser usado <br>";
echo "<br><hr>";