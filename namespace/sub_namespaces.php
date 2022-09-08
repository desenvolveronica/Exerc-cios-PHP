<?php namespace App; ?>
<div class="titulo">Sub-Namespace</div>

<?php
echo __NAMESPACE__ . "<br>";
echo "Criando contante com DEFINE <br>";
define('App\const_Define', 'Const_Define');
echo const_Define , "<br>";
echo "<br><hr>";
echo "**Inserindo outro SUB-NAMESPACE <br><br>";

namespace App\Principal; 
//daqui pra baixo está no ESCOPO do novo SUB-NAMESPACE;
//ex: App\Principal\nova
echo __NAMESPACE__ . "<br>";
echo "Variável está no contexto 'App\Principal\ nova' <br>";
const nova = 123;
echo nova;

