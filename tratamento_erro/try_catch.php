<div class="titulo">Try & Catch</div>

<?php

echo "<ul>
<p>TRY é usado para quando temos um código que pode gerar erro </p>
<li>Precisamos estabelecer uma tratativa para o ERRO com o CATCH</li>
<li>Em um CATCH colocar o tipo em parênteses para a variável $e é obrigatório</li>

</ul>";

try {
          echo intdiv(7 , 0);
} catch(Error $e){
          echo "Teve um erro aqui! <br>";
}

echo "<br><hr>";
echo "Try lançando(throw) EXCEPTION() <br>";
echo "<ul>
<li>ERROR usamos para casos de erros fatáis</li>
<li>EXCEPTION para exceções a regra/li>
<li>Para o Exception o NEW estamos instanciando</li>
<li>Não basta criar uma EXCEPTION(usando o new) é preciso lançar(THROW) esta exceção</li>

</ul>"; 


try{
          throw new Exception('Um erro muito estranho!');
          echo intdiv(7, 0); //por ter um catch ele não vai chegar nesta linha
} catch(DivisionByZeroError $e){
          echo "Divisão por zero <br>";
} catch(Throwable $e){
          echo "Erro encontrado: ". $e->getMessage() . "<br>";
}

echo "<br><hr>";
echo "<ul>
<p>Resultado em tela quando para gerar a exceção não lançamos(throw)</p>
<li>Em o throw quando for acessar a mensagem da variável '$ e', ele vai mandar a mensagem do catch</li>
<li>Valor da variável: <br> $e</li>
<li>Colocar as exceções mais específicas antes e as genéricas depois pois o contrário faz sempre cair na mais genérica</li>
</ul>";

try{
          // throw 
          new Exception('Um erro muito estranho!'); //sem o throw, em getMessage ele vai pegar a mensaqgem do catch
          echo intdiv(7, 0); //por ter um catch ele não vai chegar nesta linha
} catch(DivisionByZeroError $e){
          echo "Divisão por zero <br>";
} catch(Throwable $e){
          echo "Erro encontrado: ". $e->getMessage();
}
