<div class="titulo">Desafio Classe</div>

<?php

class Data {
          public $dia;
          public $mes;
          public $ano; 

          public function DiaMesAno($dia, $mes, $ano){
                    echo  " $dia/$mes/$ano <br>";
          }

}
$d1 = new Data();
$d1 -> DiaMesAno(01,01, 1970);
echo "<br> Outra forma de resolver o desafio <br>";

class NovaData {
          public $dia = 1;
          public $mes = 1;
          public $ano = 1970;

          public function DiaMesAno(){
                    return $this->dia;
          }
}

//primeiro passo é instanciar um OBJETO

$data1 = new NovaData;
echo $data1 -> DiaMesAno(); //sem o () ele NÃO reconhece como FUNÇÃO