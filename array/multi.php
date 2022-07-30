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

          'Olá',
];

print_r($dados); 
echo '<br>';
echo $dados['pessoa1']['nome']. '<br>';
echo $dados['pessoa2']['nome']. '<br>';
echo $dados[0]['nome'];
echo '<br>';
echo $dados[1];
echo '<br>';

echo '<p class="divisao">Adicionar dados a um elemento interno(no Array)</p><hr>';
$dados1 = [
                    [
                              "nome" => "Bolinha",
                              "idade" => 6,
                              "naturalidade" => "RS",
                    ],
                    [
                              "nome" => "Quadradinho",
                              "idade" => 2,
                              "naturalidade" => "SC",
                    ],
          ];

$dados1[1]['vizinho'] = "Chaves";
print_r($dados1[1]);
echo '<br>';

echo '<p class="divisao">array_merge(unindo os arrays)</p><hr>';
$dados1 = [
                    [
                              "nome" => "Bolinha",
                              "idade" => 6,
                              "naturalidade" => "RS",
                    ],
                    [
                              "nome" => "Quadradinho",
                              "idade" => 2,
                              "naturalidade" => "SC",
                    ],
          ];
print_r($dados1);
echo '<br><br>';
print_r($dados1[0]);
echo '<br>';
$dados2[] = ["escola" => "Escolinha"];
print_r($dados2);
echo '<br><br>';
$all = array_merge($dados1, $dados2);
print_r($all);