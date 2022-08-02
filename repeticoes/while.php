<div class="titulo">While/ Do While</div>

<?php
echo '<p>Usando WHILE</P><hr>';
const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE){
          echo "while $contador <br>";
          $contador++;
};
echo "<br> Neste ponto o contador vale $contador";

echo '<p>Usando DO WHILE</p><hr>';


do { echo "while $contador <br>"; 
          $contador++;
} while($contador < VALOR_LIMITE);

echo '<p>OBSERVAÇÃO</p><hr>';
echo '<p>Quando estamos usando o WHILE, se a condição já começa como falsa ele não executa nenhuma vez o laço while.</p>';
echo '<p>Quando usamos DO WHILE, mesmo que a condição já comece como falsa o laço será executado ao menos 1X.</p>';
echo '<p>DO WHILE é a unica estrutura de controle que que a expressão fica depois do bloco </p>';
echo '<p>DO WHILE É A ÚNICA ESTRUTURA DE CONTROLE QUE TERMINA COM (;)</p>';
