<div class="titulo">Gerenciando Sessão</div>

<?php
echo "Para trabalhar com sessão inicialmente precisamos usqar o 'session_start()' <br>";
echo "Recapitulando: Sessão é um array <br>";
echo "Para acessar array usamos 'print_r(nome do arry)' <br>";
echo "Para obeter o id da sessão usamos 'session_id()' <br>";

//sessão compartilhada
echo "<br> O 'session_id()' serve tanto para mostrar o id da sessão quando para passar o id que deseja acessar<br>";
echo "Para isso passamos o ID dentro de STRING 'session_id('641fb9d5e4dc21ccc27ab946d0f87ec2')' <br>";
session_id('c909afde707c8abe572ac2801b93937b');  // antes era: 641fb9d5e4dc21ccc27ab946d0f87ec2
echo "Para setar o 'session_id()' precisamos fazer ants do 'session_start()' <br>";
echo "<br>";

session_start();
echo "<hr><br>";


// print_r($_SESSION);
echo "Em outro navegador o id muda pois a sessão mudou";
echo "<br><br><hr>";
echo "Usamos o '&' para acessar referência de memória <br>";

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador +1 : 1; //parte inicial significa se o $contador estiver setado
echo $_SESSION['contador'] . "<br><br><hr>";


echo "<p style='color: green'>Regerando a sessão</p>";
echo "<ol>
<li>Critério para regerar a sessão:</li>
<li>Cade vez que o '%5' ou seja, resto da divisão por 5 for zero '0' => número múltiplo de 5</li>
<li>Vai gerar um novo id</li>
</ol>";

if($contador % 5 === 0){
         session_regenerate_id();
         echo "O ID foi alterado para  ";
}

echo session_id() . "<br>"; //comando para mostar o ID

