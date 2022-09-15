<div class="titulo">Try & Catch</div>

<?php

echo "<p style='color:red'>Usamos quando temos uma sentença de código que PODE dar erro</p>";

try{ //try é TENTAR
          intdiv(7,0);
} catch(Error $e){
      echo "R: Gerou um erro <br>";    
}
echo "<ul>
<li>Para usar o catch é preciso tipar a variável de erro($+e) com Error</li>
<li>Para usar um try, precisamos ter um catch ou finally</li>
<li>Um finally pode ser usado mesmo que tenha um catch</li>
<li>No catch tipando a variável você informa que tipo de erro será tratado</li>
<li>No try temos um código que PODE gerar erro e caso isso ocorra o catch é chamado</li>
</ul>";
echo "<hr>";
echo "<p style='color:blue'>Usando mais de 1 catch</p>";

try{ //try é TENTAR
      intdiv(7,0);
} catch(Error $e){
  echo "R: Teve um ERROR aqui :( <br>";    
} catch(Exception $e){
      echo "Teve uma Exception aqui :/ ";
}


echo "<ul>
<li>Podemos ter mais de 1 catch associado ao try onde usamos uma outra estrutura para tipar a variável</li>
<li>Podendo ser a Exception que tem prioridade menor que o Error </li>
<li>Mesmo tendo um erro no arquivo quando fazemos o tratamento a execução NÃO é interrompida</li>
</ul>";
echo "<hr>";
echo "<p style='color:blue'>Lançando exceção throw</p>";

try{ 
      throw new Exception('Um erro muito estranho lançado pelo **throw new Exception() '); //throw é lançar
      intdiv(7,0);
} catch(DivisionByZeroError $e){
      echo "throw new Exception <br>";
} catch(Throwable $e){  //Throwable serve para lançar tanto exceção quanto erro
      echo "R: Erro encontrado: " . $e->getMessage() . '<br>'; //erro está acessndo a mensaqgem informada como parâmetro no throw
}

echo "<ul>
<p>Exception é a classe base para todas as Exceptions</p>
<li>Error: Usamos quando algo fatal e muiuto grave acontece </li>
<li>Exception: Usamos quando temos uma exceção para a regra</li>
<li>Throwable é a interface base para qualquer objeto que pode ser lançado( Error e Exception)</li>
<li>Quando lançamos(throw) ou seja, usamos o throw new e o tipo de erro, a message é a string que é declarada nos 
parênteses da construção do objeto </li>
</ul>";
echo "<hr>";
echo "<p style='color: blue'>Message quando não usamos throw atrelado ao new</p>";

try{
      new Exception('Não será lido pois não tem o throw');
      intdiv(7,0);
} catch(DivisionByZeroError $e){
      echo "R: new Exception sem throw <br>";
} catch(Throwable $e){  
      echo "R: Erro encontrado: " . $e->getMessage() . '<br>';
}

echo "<ul>
<li>Usamos o getMessage() para acessar a partir da variável a string passada no throw</li>
<li>Se não usarmos o throw a mensagem passada será a do catch</li>
<li>Colocar as exceções mais específicas ant4es e as mais genéricas no catch posterior</li>
<li>Throwable é um erro mais genérico pois pode ser tanto Error quanto Exception</li>
<li>DivisionByZeroError é um erro mais específico</li>
</ul>";

echo "<hr>";
echo "<p style='color: blue'>O Finally é sempre imprimido mesmo se o try executou sem erro</p>";

try{
      throw new Exception('Será lido pois tem o throw');
      intdiv(7,0);
} catch(DivisionByZeroError $e){
      echo "R: new Exception sem throw <br>";
} catch(Throwable $e){  
      echo "R: Erro encontrado: " . $e->getMessage() . '<br>';
} finally{
      echo "Eu sou um Finally <br>";
}

