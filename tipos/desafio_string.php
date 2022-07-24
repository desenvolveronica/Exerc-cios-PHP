<div class="titulo">Desafio String</div>

<?php   
echo strpos('!ABCaBcabc', 'abc') . ' strpos é case sensitive <br>';
echo stripos('!ABCaBcabc', 'abc') . ' stripos não é case sensitive <br>';
echo strpos(strtolower('!ABCaBcabc'), 'abc') . ' faz a conversão para lowercase';
echo '<br> <br> <br>';