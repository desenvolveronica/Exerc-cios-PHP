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
            <option value="">Selecione</option>
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta): </label>
        <select name="t2" id="t2">
            <option value="">Selecione</option>
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php



if(((int)!!$_POST['t1'])&& ((int)!!$_POST['t2'])){
    echo 'Vale TV 50 polegadas e sorvete <br>';
}elseif(((int)!!$_POST['t1']) || ((int)!!$_POST['t2'])){
    echo 'Vale TV 32 poldegadas e sorvete <br>';    
}else {
    echo 'Fica em casa mais saudável <br>';
}



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

