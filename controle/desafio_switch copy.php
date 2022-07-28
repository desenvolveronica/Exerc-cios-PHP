<div class="titulo">Desafio Switch</div>
<style>
    form > *    {
        font-size: 20px;
    }
    button {
        background-color: pink;
        display: block;
        margin: 10px 0;
        
    }
</style>

<form action="#" method="post">
    <input type="text" name="param" placeholder = "Valor" >
    <select name="conversao" id="conversao" >  
        <option value="km-milha" >Km > Milha</option>
        <option value="milha-Km" >Milha > Km</option>
        <option value="metro-Km" >Metro > Km</option>
        <option value="Km-metro" >Km > Metro</option>
    </select>
    <button>Calcular</button>
</f

<?php
echo '<br> <p class="divisao">Solução Vídeo</p> <hr>';


const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_MILHA_KM = 0.621371;


$param = $_POST['param'] ?? 0;
switch($_POST['conversao']){
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas ";
        break;

    case 'Km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metros ";
        break;

    case 'milha-Km':
        $distancia = $param / FATOR_MILHA_KM;
        $mensagem = "$param Milhas = $distancia Km ";
        break;

    case 'metro-Km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia Km ";
        break;

    default: 
        $mensagem = 'Sem valores';

};

echo $mensagem;


echo '<p class="divisao">Minha solução</p> <hr>';
$valorInput =  $_POST['param'];
$valorOption =  $_POST['conversao'];
$valorOptionResultado;

// echo $valorInput . '<br>';
// echo $valorOption . '<br>';

switch($valorOption){
    case 'km-milha':
        $valorOptionResultado = $valorInput * 0.621371;
        break;

    case 'milha-Km': 
        $valorOptionResultado = $valorInput / 0.621371;
        break;

    case 'metro-Km':
        $valorOptionResultado = $valorInput / 1000;
        break;
    
        case 'Km-metro':
            $valorOptionResultado = $valorInput * 1000;
            break;
        
        default: 
            echo 'Sem valores <br>';

}

echo "{$valorInput} representa {$valorOptionResultado} de {$valorOption} <br>";

echo '<p class="divisao">Restosta de SELECT é o VALUE<p>';



