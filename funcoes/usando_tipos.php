<div class="titulo">Usando Tipos</div>
<?php
function soma1($a, $b){
          echo "<span>Somando $a + $b = </span>";
          return $a + $b;
}

echo soma1(4, 5) . "<br>";
echo soma1(1.7, 2.5) . "Neste caso o valor de ENTRADA é convertido em INT (considera apenas o inteiro e ignora as casas decimais)<br>";
echo soma1(1, "4dois") . "<br><br>";
echo "Tipando parâmetro da função ex: (function soma2(int $a, int $b))<br>";
echo "obs: Tentar tipar variável fora da functiom dá erro ex: (int $a = 10) <br><hr>";
function soma2(int $a, int $b){
          echo "<span>Somando $a + $b = </span>";
          return $a + $b;
}
echo soma2(4, 5) . "<br>";
echo soma2(1.7, 2.5) . " => como tem float ele pega APENAS a parte inteira<br>";
echo soma2(1, '4') . " => ele ignora as letras dentro da string <br><br>";    

echo "Tipar o tipo de retorno <br><hr> ";
function soma3($a, $b) :int{
          echo "<span>Somando $a + $b = </span>";
          return $a + $b;
}
echo soma3(4, 5) . "<br>";
echo soma3(1.7, 2.5) . " neste caso o valor de saída que é convertido=> <br>";
echo soma3(1, '4') . " => ele ignora as letras dentro da string <br><br>";    