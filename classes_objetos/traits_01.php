<div class="titulo">Traits #01</div>

<?php

trait validacao {

          public function validaString($str){
                    //verificar se a string está setada e se é diferente de uma string vazia

                    return isset($stg) && $str !== ' ' ? 'validaString passou ': 'validaString não passou';
          }

}

trait validacaoMelhor {

          public function validaStringMelhor($str){
                    echo  isset($str) && trim($str) !== ' ' ? 'validaStringMelhor passou ' :'validaStringMelhor não passou';   
                    //trim -> remove todos os espaços vazioas das pontas
                    //na primeira validação uma string vazia seria válida (" ")
          }

}


echo "<ul>
<li>Para definir uma trait usa-se a palavra reservada TRAIT</li>
<li>Similar a uma interface ou classe, mas sem a obrigatoriedade de iniciar o nome com maiúsculo </li>
<li>Dentro do corpo de uma TRAIT definimos MÉTODOS </li>
<li>Não usamos TRAIT a partir de uma HERANÇA: IMPLEMENTS OU EXTENDS</li>
<li>Para usar uma TRAIT usamos o USE DENTRO da CLASSE</li>
<li>Ao definirmos o USE DENTRO da classe temos a disposição os MÉTODOS da TRAIT</li>
<li>O USE dentro da classe é como se estivéssemos inserindo os métodos na CLASSE</li>
</ul>";

class NovoUsuario {
          use validacao, validacaoMelhor;
}

$novoUsuario = new NovoUsuario;
echo $novoUsuario -> validaString('teste');
echo "<br>";
echo $novoUsuario -> validaStringMelhor('teste');