<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php
echo "<p>O namespace é a primeira declaração em um arquivo PHP, mesmo antes do HTML</p>";

echo "CONST para acessar namespace = '__NAMESPACE__ ' =>  " . __NAMESPACE__ . '<br>';

const constante1 = 123;  //automaticamente esta constante faz parte do namespace 

echo "<ul>
<p>Para criar CONST com DEFINE()</p>
<li>1) Inserir a função DEFINE e dentro dela colocar o nome da constante e seu valor</li>
<li>2) Se a constante for atrelada a algum NAMESPACE, deve-se colocar o contexte referido e /</li>
<li>3) Fica assim: 'define('contexto\constante2', 456)' </li>
<li>Usando o define podemos chamar o NAMESPACE ao qual deseja associar a constante</li>
<li>Fica assim: 'define(__NAMESPACE__ . '\constante2', 456)'</li>
<li>Se a constante for criada sem o define ela é automaticamente atrelada ao namespace</li>
</ul>";
define('contexto\constante2', 456);
define('teste', 333);
define(__NAMESPACE__.'\constante3', 789);



