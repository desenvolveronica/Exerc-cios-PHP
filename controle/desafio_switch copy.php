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
        <option value="celsius -fireraid" >celsius  > fireraid</option>
        <option value="fireraid-celsius" >fireraid > celsius </option>
    </select>
    <button>Calcular</button>
</f

<?php
echo '<br> <p class="divisao">Solução Vídeo</p> <hr>';


const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_MILHA_KM = 0.621371;
const FATOR_CELSIUS_FIRERAID = 9/5;
const FATOR_FIRERAID_CELSIUS = 32;


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
    
    case 'celsius -fireraid':
        $distancia = $param * FATOR_CELSIUS_FIRERAID + 32;
        $mensagem = "{$param}° Celsius = {$distancia}° Fireraid ";
        break;
    
    case 'fireraid-celsius':
        $distancia = ($param - FATOR_FIRERAID_CELSIUS) * 5/9 ;
        $mensagem = "{$param}° Fireraid = {$distancia}° Celsius ";
        break;
        

    default: 
        $mensagem = "Nenhum valor calculado!";

};

echo "<p>$mensagem</p>";


echo '<p class="divisao">Minha solução</p> <hr>';
$valorInput =  $_POST['param'];
$valorOption =  $_POST['conversao'];
$valorOptionResultado;

// echo $valorInput . '<br>';
// echo $valorOption . '<br>';

switch($valorOption){
    case 'km-milha':
        $valorOptionResultado = $valorInput * 0.621371;
        echo "{$valorInput} Km representam {$valorOptionResultado} Milhas <br>";
        break;

    case 'milha-Km': 
        $valorOptionResultado = $valorInput / 0.621371;
        echo "{$valorInput} Milhas representam {$valorOptionResultado} Km <br>";
        break;

    case 'metro-Km':
        $valorOptionResultado = $valorInput / 1000;
        echo "{$valorInput} Metros representam {$valorOptionResultado} Km <br>";
        break;
    
        case 'Km-metro':
            $valorOptionResultado = $valorInput * 1000;
            echo "{$valorInput} Km representam {$valorOptionResultado} Metros <br>";
            break;

        case 'celsius -fireraid':
            $valorOptionResultado = ($valorInput * 9/5) + 32 ;
            echo "{$valorInput}° celsius representam {$valorOptionResultado}° fireraid <br>";
            break;
        
        case 'fireraid-celsius':
            $valorOptionResultado = ($valorInput - 32) * 5/9;
            echo "{$valorInput}° fireraid representam {$valorOptionResultado}° celsius <br>";
            break;
        default: 
            echo 'Sem valores <br>';
}



echo '<p class="divisao">Restosta de SELECT é o VALUE<p>';



