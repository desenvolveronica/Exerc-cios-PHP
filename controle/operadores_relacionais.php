<div class="titulo teste">Operadores Relacionais</div>
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
var_dump(1 == "1"); //r:true
echo '<br>';
var_dump(1 <> 10);  //DIFERENTE <> USADO EM SQL r:true
echo '<br>';
var_dump(1 != 1); //!= DIFERENTE TAMBÉM r:false
echo '<br>';
var_dump(10 === '10'); //estritamente iguais (compara o tipo também) r:false
echo '<br>';
var_dump(10 != '10'); //r:false
echo '<br>';
var_dump(10 !== '10'); //estritamente diferentes (compara o tipo também) r:true
echo '<br>';

echo '<p>Usando relacionais no IF e ELSE</p><hr>';
$idade = 25;
if ($idade < 10) {
    echo "Idade é {$idade} que é menor que 10 <br>";
} else {
    echo "Idade é {$idade} que é maior que 10 <br>";
}

if ($idade < 18) echo 'Menor de idade <br>';
else echo 'Maior de idade <br>';

echo '<p>SPACESHIP</p><hr>';//serve para ordenar 
var_dump(5 <=> 3);  //quando o primeiro número é maior o resultado é verdadeiro (1)
echo '<br>';
var_dump(5 <=> 5); //quando os númeroa são iguais o resultado é falso (0)
echo '<br>';
var_dump(3 <=> 5); //quando o segundo número é maior que o primeiro o resultado é (-1)
echo '<br>';

echo '<p>Valores podem ser V or F</p>   <hr>'; //coloca o ! para transformar o valor em boleano
//(!)significa a negação     (!!)negação do não e é usado para fazer o valor virar boleano
var_dump(!5); //este é a negação do 5 que é transformada em boleano também
echo '<br>';
var_dump(!!5); //esta serve para fazer o 5 de int(inteiro) virar bool(boleano) mas ele permanece igual e muda oi tipo
echo '<br>';
var_dump(!!0);
echo '<br>';
var_dump(!!'');
echo '<br>';
var_dump(!!" ");
echo '<br>';
