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
$valorInput =  $_POST['param'];
$valorOption =  $_POST['conversao'];
$valorOptionResultado;

echo $valorInput . '<br>';
echo $valorOption . '<br>';

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

}
echo "{$valorInput} representa {$valorOptionResultado} de {$valorOption} ";



