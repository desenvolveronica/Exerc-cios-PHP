<div class="titulo">Gerenciando Sessão</div>

<?php
echo "Para trabalhar com sessão inicialmente precisamos usqar o 'session_start()' <br>";
echo "Recapitulando: Sessão é um array <br>";
echo "Para acessar array usamos 'print_r(nome do arry)' <br>";
echo "Para obeter o id da sessão usamos 'session_id()' <br>";

echo "<br> O 'session_id()' serve tanto para mostrar o id da sessão quando para passar o id que deseja acessar<br>";
echo "Para isso passamos o ID dentro de STRING 'session_id('641fb9d5e4dc21ccc27ab946d0f87ec2')' <br>";
session_id('c909afde707c8abe572ac2801b93937b');  //641fb9d5e4dc21ccc27ab946d0f87ec2
echo "Para setar o 'session_id()' precisamos fazer ants do 'session_start()' <br>";
echo "<br>";

session_start();
echo "<hr><br>";


print_r($_SESSION);
echo "<br>Em outro navegador o id muda pois a sessão mudou";
echo "<br><br><hr>";
echo "Usamos o '&' para acessar referência de memória <br>";

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador +1 : 1; //parte inicial significa se o $contador estiver setado
echo $_SESSION['contador'];


