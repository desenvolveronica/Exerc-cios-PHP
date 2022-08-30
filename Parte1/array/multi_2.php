<div class="titulo">Multidimensionais parte 2</div>

<?php
$dados = [
          "pessoa" =>[
                    'nome'=> 'Maria',
                    'idade' => 15,
                    'Nacionalidade' => 'SP' 
          ],
          [
                    'nome'=> 'Vânia',
                    'idade' => 5,
                    'Nacionalidade' => 'RJ' 
          ],
];
print_r($dados['pessoa']['idade']);
//adicionar elemento no Array
echo '<br>';
$dados[] = [
          'nome'=> 'Paula',
          'idade' => 5,
          'Nacionalidade' => 'BA' 
];
print_r($dados[1]['Nacionalidade']);
echo '<br>';

echo '<p class="divisao">Novos Atributos para o Array do Array</p><hr>';
$dados["pessoa"]["Vizinho"] = 'Chaves';
print_r($dados['pessoa']);
echo '<br>';

echo '<p class ="divisao">Unset para excluir</p><hr>';
unset($dados["pessoa"]['nome']);
print_r($dados["pessoa"]);
echo '<br>';
echo '<p class ="divisao">Adicionar elemento no Array</p><hr>';
$dados["pessoa"]['nome'] = 'Divona';
print_r($dados['pessoa']);
echo '<br>';
echo '<br>';
