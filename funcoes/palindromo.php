<div class="titulo">Desafio Palindromo</div>



<?php
$teste = 'etset';

echo(strrev($teste))."<br>";
echo $teste . "<br>";

if(strrev($teste) ==="teste"){
          echo "Palindromo é igual <br>";
}else{
          echo "Palindromo é diferente <br>";
}