<div class="titulo">Try & Catch</div>

<?php

echo "<p>Usamos quando temos uma sentença de código que PODE dar erro</p>";

try{ //try é TENTAR
          intdiv(7,0);
} catch(Error $e){
      echo "Gerou um erro <br>";    
}