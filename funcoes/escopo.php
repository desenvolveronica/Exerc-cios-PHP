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