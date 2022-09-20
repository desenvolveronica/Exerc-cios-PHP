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
                    echo "Erro personalizado: $message <br>";
                    parent::__construct($message, $code, $previous);
          }

}
$FaixaEtariaException = new FaixaEtariaException('Instanciando a classe');
echo "<br>";
function calcularTempoAposentadoria($idade){
          if($idade < 18){
                    throw new FaixaEtariaException('Ainda está muito longe');
          }
          if($idade > 70){
                    throw new FaixaEtariaException('Já deveria estar aposentado');
          }

          return 70 - $idade;
}

$idadesAvaliadas = [15, 30, 60, 80];

echo "Para tratar todas as idades é necessário um looping contendo um try e catch 
<br> Se não houver try e catch na primeira exceção o for iria finalizar<br>";

echo "<br><hr>";

echo "Usando foreach <br>";

foreach($idadesAvaliadas as $i){

}