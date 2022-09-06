<?php namespace contexto; ?>
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
define('contexto\constante2', 'Constante2');
define('constante3', 'Constante3');
// define(__namespace__.'\constante33', 789);

echo constante1 . '<br>';

echo constante2 . '<br>';

echo "<br><hr>";

echo "<ul>
<li>1) Acessar caminho ABSOLUTO da variavel definida no DEFINE usando \ </li>
<li>Fica assim:  '\contexto\constante2' </li>
<li>Acessando sem o \ ele acessa o caminho RELATIVO</li>
<li style='color: red' >Fica assim:  'contexto\contexto\constante2 ' <strong>=> ERRADO</strong></li>
</ul>";
echo \contexto\constante2 . '<br>';

echo "<br><hr>";

define('outro_contexto\constante4', 'Constante 4');
echo "<ul>
<li>1) Para acessar um novo contexto estando dentro de outro é necessário colocar o \ </li>
<li>Fica assim:  '\outro_contexto\constante4' </li>
<li>Sem o \ o php assume que o acesso é no contexto atual</li>
<li>Colocando o \ é explicitado que o acesso é no referido CONTEXTO</li>
</ul>";
echo \outro_contexto\constante4 . '<br>';

function somando($a, $b){
          $res = $a + $b ;
          return "A soma de {$a} com {$b} é =  {$res}";
}

echo "Uma função definida dentro de um NAMESPACE pode ser acessada 'echo somando(4,5)' <br>";
echo "Podemos acessar passando o caminho absoluto ' \contexto\somando(7,8)' <br>";
echo somando(4,5);
echo "<br>";
echo \contexto\somando(7,8);
echo "<br><br><hr>";


function strpos($str, $texto){
          echo "Buscando a '{$texto}' na string '{$str}' <br>";
};

echo "Desta forma acessa a function no contexto do NAMESPACE  'strpos('procurando a palavra', 'palavra');' <br>";
echo strpos('procurando a palavra', 'palavra');
echo "<br>";
echo "STRPOS() passa string e texto <br>";
echo "Diz se aquela string está contida em um texto e em qual posição <br>";
echo "<br>";
echo "Usando o \ acessa a function no contexto da API do PHP  '\strpos('procurando a palavra', 'palavra');' <br>";
echo \strpos('procurando a palavra', 'palavra');


echo "<br><br>Cheguei aqui";
