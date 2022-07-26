<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9); //CONSTANTES NÃO USAM O $ DÓLAR
echo TAXA_DE_JUROS . '<br>'; //PARA DEFINIR COLOCAMOS TUDO EM MAIÚSCULO SEPARADO POR UNDERLINE _
echo "TAXA_DE_JUROS <br>"; //neste caso não funciona a concatenação

//PODEMOS USAR O CONST 
const NOVA_TAXA = 2.5;
echo NOVA_TAXA . '<br>';
echo "NOVA_TAXA <br>"; //neste caso também não funciona
$valorVariavel = 2.8;
// const NOVISSIMA_TAXA = $valorVariavel; ESTE CASO NÃO FUNCIONA
//É POSSÍVEL COM DEFINE()

define('NOVISSIMA_TAXA', $valorVariavel);
echo NOVISSIMA_TAXA . '<br>';
echo PHP_VERSION . '<br>';
echo __DIR__ . '<br>';
echo 'Linha:'. __LINE__ . '<br>';
echo 'Linha:'. __LINE__ . '<br>'; //mostra em tela qual a linha de código
echo 'Arquivo: ' .__FILE__ . '<br>';