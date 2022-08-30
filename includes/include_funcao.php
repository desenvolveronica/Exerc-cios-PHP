<div class="titulo">Include em Função</div>

<?php

echo "<p style='color:orange'>Carregando include em função</p>";
echo "Para chamar um include em uma function basta passar como parâmetro o nome ou diretório do arquivo
 => 'include('include_arquivo.php')'<br> ";
echo "Como a função deu um INCUDE com o arquivo, ela ganhou acesso aos componentes dele <br>";

function carregarArquivo(){
          include('include_arquivo.php');
          echo $variavel . '<br>';
          echo soma(3,4);
}


echo carregarArquivo();
echo "Função chamada em aspecto global, ou seja, fora de onde está chamando o **include_arquivo.php <br>";
echo soma(5,6);
echo "Vale a pena ressaltar que a função do arquivo sendo chamada em aspecto global 
só funciona se o arquivo já tiver sido incçuído <br>";

echo "<br><hr>";

echo "<strong>Insumos repassado pelo outro arquivo SÓ podem ser usado depois que a função que aciona o INCLUDE foi CHAMADA</strong> <br>";
echo "<br>";

echo "O valor da variável é : '{$variavel}' . <br>";
var_dump($variavel);
echo "<br> Neste caso o valor da variável é null pois a variável foi definida dentro da function (no momento do include)<br>";

echo "<br>";
echo "Importante ressaltar que quando se trata de FUNCTION conseguimos acessar 
mesmo FORA DO ESCOPO de carregarArquivo (onde está o include do arquivo)<br>";
echo soma(10,3);
