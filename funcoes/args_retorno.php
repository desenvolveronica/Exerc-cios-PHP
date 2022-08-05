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