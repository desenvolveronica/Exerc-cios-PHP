<div class="titulo">Desafio Teste</div>

<?php

include_once 'desafio_intdiv copy.php';
echo "Usando o include temos acesso aos métodos e classes do outro arquivo <br>" ;
echo "<br><hr>";
echo "Precisamos do <strong style='color: red'>USE</strong> para usar a function incluida no include_once <br><br>";

use function \Aritmetica\intdiv;

try {
    echo intdiv(8,3) . '<br>'; //colocando o \Aritmetica\intdiv não precisaria do USE
} catch (\Aritmetica\NaoInteiroException $e){//onde definimos o tipo da exceção lançada
    echo "Resultado não é um número inteiro <br>";
}

try {
    echo intdiv(8,0) . '<br>';
    //não estamos usando o / para o DivisionByZeroError pois não estamos usando o namespace 
}catch(DivisionByZeroError $e){
    echo "Divisão por zero <br>";
}

echo intdiv(8, 2) ."<br>";

echo 'Acessando a API do PHP : ' . \intdiv(8, 2) .' <br>';

echo "Usando o / saimos do namespace e acessamos a função da API do PHP <br>";

