<div class="titulo">Break/Continue</div>

<?php
echo '<p>Usando BREAK (interrompe a EXECUÇÃO do laço)</p><hr>';
$cont = 18;
for(; ;){
       echo $cont .'<br>';
       $cont++;   
       if($cont >20){
          break; //após este break nada mais vai ser feito dentro DESTE laço
          echo 'TESTE';
          echo 'tentei';
       };
};
echo 'Saiu do laço com valor = '. $cont .'<br>';
echo 'FIM! <br>';

echo '<p>Usando CONTINUE (passa para próxima linha)</p><hr>';
for(;;){
          $cont++;
          if($cont %2 === 1){
                    continue; //neste caso ele passsa para a PRÓXIMA LINHA
          };
          echo "$cont <br>";
          if($cont >= 26){
                    break;
                    echo 'tentei';
          }{
                    echo "$cont <br>";
          };

};

echo '<p>Foreach com Array</p><hr>';
foreach(array(1,2,3,4,5) as $valor){
          if($valor === 5) break;
          if($valor %2 === 0) continue;
          echo "$valor <br>";
}