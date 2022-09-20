<div class="titulo">Erros Personalizados</div>

<?php
echo "<ol>
<p>Herança entre classes usamos o extends</p>
<li>Exception é a classe base de todas as exceções</li>
<li>Para uma exceção é passado parâmetros obrigatórios</li>
<li></li>
</ol>";
echo "<p style='color: blue'>O que determina que a classe é uma exceção é a herança onde usamos extends Exception</p>";
class FaixaEtariaException extends Exception {
          function __construct($message, $code = 0, $previous = null){
                    
          }
}