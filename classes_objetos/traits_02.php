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


                    //para usar a outra function podemos criar um ALIAS
                    validacao::validarString as validacaoSimples;

          }
}


echo "<ul>
<li>Quando temos conflitos de nomes (mesmos nomes) em métodos em diferentes TRAITS usamos o INSTEADOF</li>
<li>Após chamarmos o USE e colocarmos as TRAITS abrimos um bloco de cógigo</li>
<li>Com o uso de INSTEADOF definimos qual MÉTODO vamos passar por default</li>
<li>Colocamos a TRAIT alvo acompanhado de :: e seu método e insteadOf a TRAIT declinada</li>
<li>Em suma declaro a  TRAIT :: nome do método em detrimento (insteadOf) a outra TRAIT</li>
<li>Para o método da TRAIT que foi preteriado (ignorado) podemos passar um ALIAS (apelido) e usa-lo</li>
<li>SOMENTE MUDAR O NOME DO MÉTODO SEM RESOLVER O CONFLITO NÃO RESOLVE O PROBLEMA</li>
</ul>";

$novissimoUsuario = new NovissimoUsuario;

echo $novissimoUsuario->validarString('teste') . "<br>";


echo "<br> Método ignorado sendo chamado passando ALIAS dentro das chaves <br>";
echo $novissimoUsuario ->validacaoSimples('teste') . "<br><br>";



class OutroNovo {

          use validacao, validacaoMelhor {

                    validacao::validarString insteadOf validacaoMelhor;
                    validacaoMelhor::validarString as validacaoCompleta;
          }         
}

$outroNovo = new OutroNovo;
echo "Outra TRAIT em uso <br>";
echo $outroNovo-> validarString('') . "<br>";
echo "<br> Usando o ALIAS da outra TRAIT <br>";
echo $outroNovo->validacaoCompleta('Outro');


echo "<br>";