<div class="titulo">Try & Catch</div>
<p style="color: green">Usamos o try/catch quando temos um código parigoso que pode gerar erro</p>
<?php

try {
          intdiv(7, 0);
} catch (DivisionByZeroError $e) {
          echo "Você tentou dividir por 0 <br>";
}
echo "Cheguei aqui";
