<div class="titulo">Erros Personalizados</div>

<?php
echo "<ol>
<p>Herança entre classes usamos o extends</p>
<li>Exception é a classe base de todas as exceções</li>
<li>Para uma exceção é passado parâmetros obrigatórios</li>
<li>'$ previous' é quando a exceção foi causada por uma outra exceção</li>
</ol>";
echo "<p style='color: blue'>O que determina que a classe é uma exceção é a herança onde usamos extends Exception</p>";

class FaixaEtariaException extends Exception {
          function __construct($message, $code = 0, $previous = null){
                    echo "<br>Erro personalizado: $message <br>"; //sempre chamado quando entra no if 
                    parent::__construct($message, $code, $previous);
          }

}
// $FaixaEtariaException = new FaixaEtariaException('Instanciando a classe');
// echo "<br>";
function calcularTempoAposentadoria($idade){
          if($idade < 18){
                    throw new FaixaEtariaException('Ainda está muito longe para se aposentar'); //está instanciando
          }
          if($idade > 70){
                    throw new FaixaEtariaException('Já deveria estar aposentado'); //está instanciando
          }

          return 70 - $idade;
}

$idadesAvaliadas = [15, 30, 60, 80, 29];

echo "Para tratar todas as idades é necessário um looping contendo um try e catch 
<br> Se não houver try e catch na primeira exceção o for iria finalizar<br>";

echo "<br><hr>";

echo "Usando foreach <br>";

foreach($idadesAvaliadas as $idade){ //cada elemento do array vai ser chamado pela variável $idade
          try{
                  $tempoRestante = calcularTempoAposentadoria($idade);
                  echo "Idade: $idade / falta: $tempoRestante anos <br>";
                  //no catch vamos tratar a exceção da classe FaixaEtariaException
          } catch(FaixaEtariaException $e){ //$e é a exceção e FaixaEtariaException é o tipo dele
                    echo "Não foi possivel calcular para a idade $idade anos<br>";
                    echo "Motivo: {$e->getMessage()} <br><br>";
          }         
}