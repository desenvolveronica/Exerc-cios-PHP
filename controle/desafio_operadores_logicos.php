<div class="titulo">Desafio Operadores Lógicos</div>
<style>
    button, select{
        font-size: 1.8rem;
    }

</style>
<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça): </label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta): </label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php

echo '<p class="divisao">Minha forma</p> <hr>';

if((!!$_POST['t1'] === true) && (!!$_POST['t2'] ===true)){
    echo 'Vale TV 50 polegadas e sorvete <br>';
}elseif((!!$_POST['t1'] === true) || (!!$_POST['t2'] === true)){
    echo 'Vale TV 32 poldegadas e sorvete <br>';    
}elseif((!!$_POST['t1'] === false) && (!!$_POST['t2'] === false)) {
    echo 'Fica em casa mais saudável <br>';
}


echo '<p class="divisao">Forma vídeo</p> <hr>';
$t1 = $_POST['t1'] === '1';
$t2 = $_POST['t2'] === '1';
$tv = '';
$sorvete = false;
$resultado = false;

if($t1 AND $t2){
     $tv ='50"';
}
if($t1 XOR $t2){
    $tv ='32"';
}

if($t1 OR $t2){
    $sorvete = true;
}

if($tv){
    $resultado = "Vamos comprar uma TV de $tv";
}else {
    $resultado = "Sem TV";
}

$saudadel = !$sorvete;

if($saudadel){
    $resultado .= '<br> Estamos mais saudáveis';
}else {
    $resultado .= "<br>Sorvete Liberado \o/";
}


echo $resultado;

echo '<p class="divisao">Observações <hr></p>';
var_dump($_POST['t1']); // resultado var_dump é string
echo '<br>';
var_dump(!!$_POST['t1']);  // resultado do !!var_dump é TRUE
echo '<br>';
var_dump((int)!!$_POST['t1']); //resultado é numérico 
echo '<br>';

// $trabalhoA = true; 
// $trabalhoB = false; 

// if($trabalhoA && $trabalhoB){
//     echo 'Vale TV 50polegadas e sorvete <br>';
// }elseif($trabalhoA != $trabalhoB){
//     echo 'Vale TV 32 poldegadas e sorvete <br>';
// }else {
//     echo 'Fica em casa mais saudável <br>';
// }; 

