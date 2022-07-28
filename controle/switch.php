<div class="titulo">Switch (estrutura de controle)</div>

<?php

echo '<p class="divisao">Estrutura Switch </p> <hr>';

$categoria = 'LUXO';
switch(strtolower($categoria)){
    case 'luxo':
        $preço = 250000;
        $carro = 'Mercedes';
        break;

    case 'suv':
        $preço = 80000;
        $carro = 'Renegade';
        break;

    case 'Sedan':
        $preço = 55000;
        $carro = 'Etios';
        break;

    // case 'mobi' || '':
    //     $preço = 33000;
    //     $carro = 'Mobi';
    //     break;

    default :
        $preço = 34000;
        $carro = 'Mobi';
    
};
$preçoFormatado = number_format($preço, 2 , ',' , '.');
echo "Carro: {$carro} <br> Preço: {$preçoFormatado} <br>";

echo '<p class="divisao">Estrutura IF e ELSEIF</p><hr>';

$categoria = '';
$preço;
$carro;

if($categoria === 'Luxo'){
    $carro = 'Mercedes';
    $preço = 250000;

}else if($categoria === 'SUV'){
    $carro = 'Renegade';
    $preço = 80000;
}elseif($categoria === 'Sedan'){
    $carro = 'Etios';
    $preço = 55000;
}else {
    $carro = 'Mobi';
    $preço = 33000;
    $categoria = 'Popular';
}

$preçoFormatado = number_format($preço);
// echo $preçoFormatado;  coloca o (,000)
$preçoFormatado = number_format($preço, 2 , ',' , '.');
echo "Sua categoria é $categoria, então seu carro é $carro que custa $preçoFormatado <bh>";

