<div class="titulo">Função & Escopo</div>

<?php
 function imprimirMensagem(){
          echo "Olá ";
          echo "Até a próxima <br>";
 }

 imprimirMensagem(); 
 imprimirMensagem(); 
 imprimirMensagem(); 

 $variavel = 1; 
echo "<br> Aqui fora o valor inicial da variável é {$variavel} <br>";
 function trocaValor(){
          $variavel = 2;
          echo "Aqui dentro da função o valor da variável é {$variavel} <br>";
 }
 trocaValor();
echo "Aqui fora da função o valor da variável volta a ser {$variavel}<br>";
echo "<br><hr>";

// echo "Valor da variável até aqui é : {$variavel} <br>";
function trocaValorDeVerdade(){
          global $variavel;  //indicando que ela é global a mesma é declarada (neste caso conseguimos usar a variável fora do bloco)
          $variavel = 10;
          echo "O valor da variável dentro do bloco é : {$variavel} <br>";
}
echo "Até este ponto como a função não tinha sido chamada o valor da variável é : {$variavel}<br>";
trocaValorDeVerdade(); //neste ponto a função está sendo chamada
echo "Mesmo fora da função o valor da variável é : {$variavel} / ISSO PQ FOI USADO O GLOBAL ANTES DE CHAMAR A VARIAVEL DENTRO DA FUNÇÃO <br>";
echo "<hr>";
echo "=> Resultado do var_dump em uma função que nao tem retorno" .var_dump(trocaValorDeVerdade());  //a função é chamada novamente e executa o código
//o resultado do var_dump é NULL pois esta função não retorna NADA