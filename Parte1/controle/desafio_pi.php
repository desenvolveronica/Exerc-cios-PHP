<div class="titulo">Desafio PI</div>

<?php
echo pi();  //função que retorna o valor do pi
echo '<br>';
$pi = 3.14;

if($pi === round(pi(), 2)){
    echo 'Viva!!! eles são iguais! <br>';
}else {
    echo 'Que triste, são diferentes <br>';
}
echo (round(pi(), 2));
echo '<br>';
if($pi === (pi() - 0.001592653589793)){
    echo 'Viva!!! eles são iguais! <br>';
}else {
    echo 'Que triste, são diferentes <br>';
}
echo $pi - pi();
echo '<br>';
if(($pi +0.001592653589793) === pi()){
    echo 'Viva!!! eles são iguais! <br>';
}else {
    echo 'Que triste, são diferentes <br>';
}
echo '<br>';
if($pi - pi() <= 0.01){
    echo 'Eles são praticamente iguais <br>';
}else {
    echo 'Eles não são nem perto de serem iguais <br>';
}