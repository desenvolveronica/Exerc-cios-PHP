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