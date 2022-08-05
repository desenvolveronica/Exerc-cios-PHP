<div class="titulo">Desafio Palindromo</div>



<?php
$teste = 'etset';

echo(strrev($teste))."<br>";
echo $teste . "<br>";


if(strrev($teste) ==="teste"){
          echo "Palindromo é igual <br>";
}else{
          echo "Palindromo é diferente <br>";
}
echo "<hr>";

function palindromo($palavra){
           $ultimoIndice = strlen($palavra)-1;  //neste ponto está pegando o último índice da string => lembrando que ele começa no 0
           for($i = 0; $i <= $ultimoIndice; $i++){
                    if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
                              return "Não";
                    }
           }
           return "Sim";
}
echo palindromo('arara') . "<br>";
echo palindromo('bola') . "<br>";
echo palindromo('teste') . "<br>";
echo palindromo('oco') . "<br>";

echo strlen('teste'). "<br>"; //strlen => 5 e ele tem 4 índices
echo "<br> Outra forma <hr>";

function palindromoSimples($palavra){
          if($palavra === strrev($palavra))
          {echo "sim esta palavra é um palindromo";} else{echo "Não esta palavra não é um palindromo";}
          
}
echo (palindromoSimples('arara')). "<br>";
echo "<br><hr>";
function palindromoSimplesParte2($palavra){
         return $palavra === strrev($palavra) ? "Sim" : "Não"; //sem o return a função NÃO mostra nada
 
}
echo (palindromoSimplesParte2('arara')). "<br>";