<div class="titulo">Argumentos e retorno</div>
<p class="divisao">Argumentos = Parâmetros</p>


<?php

function obterMensagem(){   //essa função não recebe nenhum argumento/ parâmetro
         return "Seja bem vindo";
}

echo obterMensagem() . "<br><br>"; //se nao tivesse sido usado o echo NADA iria aparecer na tela MESMO com o RETURN
echo "Resultado de uma função pode ser associado a uma VARIÁVEL <br><hr>";
$mensagem =  obterMensagem();
echo $mensagem . '<br><br>';
echo "Resultado de um VAR_DUMP de uma FUNCTION é seu  RETORNO <hr>";
var_dump(obterMensagem()); //resultado do var_dump é o RETURN => string(14) "Seja bem vindo"
echo "<br><br>";
echo "Função recebendo um parâmetro<hr>";
echo "<br>";
function obtemMensagemComNome($nome){   //parâmetro passado $nome que COLOCAMOS O QUE QUEREMOS NA HORA DE CHAMAR A FUNCTION
          return "Seja bem vindo (a), $nome";
}
$chamada = obtemMensagemComNome('Verônica');
echo "$chamada <br>";
$chamada2 = obtemMensagemComNome('Diva');
echo "$chamada2 <br>";
echo "<hr>";

function soma($a, $b){
          return $a + $b;
}
echo soma(5, 10) . "<br><br>";
echo "Colocando os parâmetros como variáveis <hr>";
$x = 10;
$y = 20;
echo soma($x, $y) . '<br>';

function trocaValor($a, $novoValor){
          $a = $novoValor;
          echo "<br5> $a <br>";
}
$variavel = 1;
trocaValor($variavel, 28); // neste ponto o $a vale 28 pq o $novoValor vale 28 também
echo "Valor da variável foi declarado como 1, mas foi SUPRIMIDO detro do trocaValor($variavel, 28) <br>";
echo "Fora do trocaValor() a variável vale: $variavel <br>";

echo "<br>Forma de passar a referência e não o valor & <hr>";
function trocaValorDeVerdade(&$a, $novoValor){
          $a = $novoValor;
          echo "variável vale dentro da função {$a} <br>";
}
trocaValorDeVerdade($variavel, 5000);
echo "Isso acontece pq com o & acessamos o ENDEREÇO DE MEMÓRIA <br>";
echo "A variável vale fora da função {$variavel} <br>";

