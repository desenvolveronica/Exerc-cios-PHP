<div class="titulo">Try & Catch</div>

<?php

echo "<p>Usamos quando temos uma sentença de código que PODE dar erro</p>";

try{ //try é TENTAR
          intdiv(7,0);
} catch(Error $e){
      echo "Gerou um erro <br>";    
}
echo "<ul>
<li>Para usar o catch é preciso tipar a variável de erro($+e) com Error</li>
<li>Para usar um try, precisamos ter um catch ou finally</li>
<li>Um finally pode ser usado mesmo que tenha um catch</li>
<li>No catch tipando a variável você informa que tipo de erro será tratado</li>
<li>No try temos um código que PODE gerar erro e caso isso ocorra o catch é chamado</li>
</ul>";
echo "<hr>";
echo "<p>Usando mais de 1 catch</p>";

try{ //try é TENTAR
      intdiv(7,0);
} catch(Error $e){
  echo "Teve um ERROR aqui :( <br>";    
} catch(Exception $e){
      echo "Teve uma Exception aqui :/ ";
}


echo "<ul>
<li>Podemos ter mais de 1 catch associado ao try onde usamos uma outra estrutura para tipar a variável</li>
<li>Podendo ser a Exception que tem prioridade menor que o Error </li>
<li>Mesmo tendo um erro no arquivo quando fazemos o tratamento a execução NÃO é interrompida</li>
</ul>";
echo "<hr>";
echo "<p>Lançando uma exceção throw</p>";

try{ 
      throw new Exception('Um erro muito estranho lançado pelo **throw new Exception '); //throw é lançar
      intdiv(7,0);
} catch(DivisionByZeroError $e){

}    

echo "<ul>
<p>Exception é a classe base para todas as Exceptions</p>
<li>Error: Usamos quando algo fatal e muiuto grave acontece </li>
<li>Exception: Usamos quando temos uma exceção para a regra</li>
<li></li>
</ul>";