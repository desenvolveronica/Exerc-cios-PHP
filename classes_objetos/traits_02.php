<div class="titulo">Trait #02</div>

<?php
//criando 2 TRAIT com métodos com os mesmos nomes

trait validacao {

          public function validarString($str){

                    return isset($str) && $str !== ''? 'String válida': 'String não válida';
          }
}

trait validacaoMelhor {
          public function validarString($str){

                    return isset($str) && trim($str)? 'String válida': 'String não válida' ;
          }

}

class NovissimoUsuario {
          use validacao, validacaoMelhor {
                    validacaoMelhor::validarString insteadOf validacao;
          }
}


echo "<ul>
<li>Quando temos conflitos de nomes (mesmos nomes) em métodos em diferentes TRAITS usamos o INSTEADOF</li>
<li>Após chamarmos o USE e colocarmos as TRAITS abrimos um bloco de cógigo</li>
<li>Com o uso de INSTEADOF definimos qual MÉTODO vamos passar por default</li>
<li>Colocamos a TRAIT alvo acompanhado de :: e seu método e insteadOf a TRAIT declinada</li>
<li>Em suma declaro a  TRAIT :: nome do método em detrimento (insteadOf) a outra TRAIT</li>
</ul>";

$novissimoUsuario = new NovissimoUsuario;

echo $novissimoUsuario->validarString('teste');



class OutroNovo {

          use validacao, validacaoMelhor {

                    validacao::validarString insteadOf validacaoMelhor;
          }         
}

$outroNovo = new OutroNovo;

echo "<br>" . $outroNovo-> validarString('') . "<br>";