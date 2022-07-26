<div class="titulo">Operadores Lógicos</div>
<style>
    p{
        color: purple;
        margin-block-start: 50px;
        margin-block-end: 10px;
    }
    hr{
        margin-top: 0px;
    }
</style>

<?php
echo '<P>Negaçção Lógica</P> <hr>';
var_dump(true);
echo '<br>';
var_dump(!true);
echo '<br>';

// echo '<p>Tabela Verdade "AND" |/AND (E)</p> <hr>'; 
// var_dump(true && true); 
// echo '<br>';
// var_dump(true && false);
// echo '<br>';
// var_dump(false && true);
// echo '<br>';
// var_dump(false && false);
// echo '<br>';
// var_dump(true and true); 
// echo '<br>';
// var_dump(true and false);
// echo '<br>';
// var_dump(false and true);
// echo '<br>';
// var_dump(false and false);
// echo '<br>';

echo '<p>Tabela Verdade "OR" (OU) || </p><hr>';
var_dump(true || true); 
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || true);
echo '<br>';
var_dump(false || false);
echo '<br>';

echo '<p>Tabela Verdade "XOR" (OU EXCLUSIVO) != </p><hr>';
var_dump(true xor true); 
echo '<br>';
var_dump(true xor false);
echo '<br>';
var_dump(false xor true);
echo '<br>';
var_dump(false xor false);
echo '<br>';
var_dump(true != true); 
echo '<br>';
var_dump(true != false);
echo '<br>';
var_dump(false != true);
echo '<br>';
var_dump(false != false);
echo '<br>';