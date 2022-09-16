<div class="titulo">Erros Personalizados</div>

<?php
echo "<ul>
<p>Para se ter uma herança entre classes usa-se extends</p>
<li style='color: green'>Exception é a mãe de todas as exceções</li>
<li>Para as exceções é passado por padrão 3 parâmetros: mensagem, código e previous(anterior) </li>
<li>Previous é se a exceção foi causada por uma outra exceção</li>
<li>Previous: passa a causa original da exceção, se houver</li>
</ul>";


class FaixaEtariaException extends Exception {
          public function __construct($message, $code = 0, $previous = null){
                    echo "Erro Personalizado: $message <br>";
                    parent::__construct($message, $code, $previous);
          }
}

function calculoAposentadoria($idade){
          if($idade < 18){
                    throw new FaixaEtariaException('Ainda está muito longe');
          }
          if($idade > 70){
                    throw new FaixaEtariaException('Pessoa já deveria estar aposentada');
          } 
          return 70 -$idade; 
}

$idadesAvaliadas = [15, 30, 60, 80];

echo "Colocamos um try e catch no foreach pois se não na primeira exceção 
ele iria sair e não continuaria passando pelos outros <br><br>";
foreach($idadesAvaliadas as $idade){
          try {
                    $tempoRestante = calculoAposentadoria($idade);
                    echo "Idade: $idade, falta $temporestante anos <br>";
          }catch(FaixaEtariaException $e){
                    echo "Não foi possível calcular para a idade $idade <br>";
                    echo "Motivo: {$e->getMessage()} <br>";
          }
}
