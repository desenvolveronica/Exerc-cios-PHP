<div class="titulo">Multidimensionais</div>

<?php
$dados = [
          "pessoa1" => 
                    [
                    "nome" => "Verônica",
                    "idade" => 26,
                    "naturalidade" => "Belo Horizonte",
                    ],
          "pessoa2" => 
                    [
                    "nome" => "Tita",
                    "idade" => 28,
                    "naturalidade" => "São Paulo",       
                    ],
                    [
                    "nome" => "Diva",
                    "idade" => 29,
                    "naturalidade" => "Rio de Janeiro",       
                    ],
];

print_r($dados); 
echo '<br>';
echo $dados['pessoa1']['nome']. '<br>';
echo $dados['pessoa2']['nome']. '<br>';
echo $dados[0]['nome'];