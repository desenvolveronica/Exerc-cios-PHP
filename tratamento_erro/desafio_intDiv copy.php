<?php
namespace Aritmetica; 
echo "O namespace é a primeira declaração em um arquivo PHP, mesmo antes do HTML <br>";
echo "Usar o \Exception para herdar de uma EXCEPTION quando estamos em um namespace <br>";
//classe lançada quando tiver uma exceção não inteira
//como vamos herdar de exception temos que acessar o namespace raiz que é onde a mesma está definida
class NaoInteiroException extends \Exception{


}

function intdiv($a, $b){
          if($b == 0){
                    throw new \DivisionByZeroError();  //colocando o \ refere3nciando que estou acessando algo pertencente ao PHP
                    echo "Divisão por zero <br>";
          }

          //$a % $b > 0 significa que temos uma divisão não inteira
          if($a % $b > 0) {
                    throw new NaoInteiroException();
                    
          }
          return $a / $b;
}
