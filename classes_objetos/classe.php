<div class="titulo">Primeira Classe</div>

<?php

class Cliente {
         //atributos
         public $nome = 'Anônimo';  // public é um modificador de vizibilidade => neste caso e elestá vizivel FORA da CLASSE
         public $idade = 18; //nem preciso de colocar os valores

         public function apresentar($nome, $idade){
          echo "Olá me chamo $this->nome e tenho {$this->idade} anos."; //para acessar o valor que foi usado na criação usamos o THIS
         }
}

$c1 = new Cliente(); //com o new foi feita uma estância(objeto) de classe Cliente
$c1 -> apresentar('Verônica', 28);

echo "<br><br> Para acessar o VALOR que foi usado na CRIAÇÃO da CLASSE é preciso usar o $THIS -> parâmetro <br>";
echo "Para mudar o valor do atributo que está usando o THIS é preciso acessar o atributo e fazer uma nova ATRIBUIÇÃO <br>";
$c1-> nome = 'Verônica';
$c1 -> apresentar('Verônica', 28); //neste ponto a idade ainda está conforme foi criado no início
echo "<br><br>";
$c1-> idade = 28;
$c1 -> apresentar('Verônica', 28);

echo "<br>Criando outro objeto ( fazendo nova estância ) com NEW <br><hr>";

$c2 = new Cliente; //com o NEW é feita uma nova estância
$c2 -> nome = 'Diva';
$c2 -> idade = 27;

$c2-> apresentar('Verônica', 28);
echo "<br>";

echo "<br> Como foi inserido no método ($nome, $idade) para cada chamada ele pede para passar um valor para esses atributos <br>";
echo "SOLUÇÃO: <br>";
echo "Não passar nada na criação do MÉTODO ou seja:   public function apresentar(){}...";
