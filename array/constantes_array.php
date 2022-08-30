<div class="titulo">Arrays Constantes</div>
<?php
const FRUTAS = array('laranja', 'abacaxi'); //ou const FRUTAS = ['laranja', 'abacaxi']
// FRUTAS[2] = 'COCO'; //por ser uma CONST os elementos nao podem ser alterados
print_r(FRUTAS);
echo '<br>';
const CARRO = ['Fiat' => 'Uno', 'BMW' => 'Fiesta'];
print_r(CARRO);
echo '<br>';
define('CIDADES', array('BH', 'RE'));
print_r(CIDADES);
echo "<br>";
echo '<h3 info>QUANDO O ARRAY É DECLARADO POR UMA CONST NADA NELE MUDA</h3>';
echo '<h4 info>$_GET e $_POST  = SÃO ARRAYs</h4>';
?>
<style>
          [info]{
                    display: flex;
                    justify-content: center;
          }
</style>