<div class="titulo">Membros Estáticos</div>

<?php
echo "Uma variável ESTÁTICA é da classe e uma não ESTÁTICA é da instância(objeto)<br>";
echo "Toda instância tem ACESSO a constante ou variável STATIC <br>";
echo "Para acessar as variáveis da classe PRECISA chamar o $THIS -> <br>";
echo "<br>";
echo "Para acessar a variável da classe (STATIC) é preciso: <br>";
echo '1) Interpolação com ("não funciona") não funciona <br>';
echo "Necessário fazer a concatenação <br>";
echo "2) Necessário uso da palavra reservada self <br>";
echo "3) Como não usa o THIS o $ fica com a variável <br>";
echo "FICA ASSIM : self::$ +variavel <br> ";
echo "<br><hr>";
class A {
          public $naoEstatica = 'Variável de Instância';
          public static $statica = "Variável da classe";

          public function mostraA(){
                    echo "<br>*Acessando variável não estática: {$this->naoEstatica}<br>";
                    echo "***Acessando variável STÁTICA (variável da classe)<br>";
                    echo "Variável estática: " . self::$statica . "<br>";
          }

          public static function mostraStaticA(){
                    echo "Esta é uma função STATIC <br>";
                    echo "Membro Estático = " . self::$statica ."<br>";
          }


}
$novoA = new A;
$novoA->mostraA();
echo "<br><br>";
$novoA->mostraStaticA();
echo "<br><br>";
echo "Para chamar uma função stática é igual ou seja, a partir da estância da classe <br>";
echo "THIS não está disponível quando uma função é STATIC <br>";
echo "DENTRO DE UMA FUNÇÃO STATIC SÓ É POSSÍVEL ACESSAR MEMBROS ESTÁTICOS <br>";

echo "Cheguei aqui <br>";