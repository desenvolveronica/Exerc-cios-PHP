<?php namespace App; ?>
<div class="titulo">Sub-Namespace</div>

<?php
echo __NAMESPACE__ . "<br>";
echo "Criando contante com DEFINE <br>";
define('App\constante', 'criada no APP');
echo 'Constante criada no NAMESPACE APP => ', constante , "<br>";  //VALOR :   criada no namespace APP
echo "<br><hr>";
echo "**Inserindo SUB-NAMESPACE <br><br>";

namespace App\Principal; 
//daqui pra baixo está no ESCOPO do novo SUB-NAMESPACE;
//ex: App\Principal\nova
echo __NAMESPACE__ . "<br>";
echo "Variável está no contexto 'App\Principal\ nova' <br>";
const nova = 123;
echo nova , '<br>';
echo "<br><hr>";
echo 'Constante criada no SUB-NAMESPACE <br>';
echo "Esta constante tem o mesmo nome de outra, mas como estão em NAMESPACES diferentes ela não conflitam <br>";

define('App\Principal\constante', 'Criada no SUB-NAMESPACE principal'); //VALOR:  criada no SUB-NAMESPACE principal
echo '<br> R: ', constante . '<br>';


