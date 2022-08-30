<div class="titulo">Fatorial recursivo</div>
<p>Resolvendo de forma recursiva (quebrando o problema inicial no mesmo problema porém, menores</p>
<br>
7! = 5040
          =>7 * 6! (720 * 7 = 5040)
                    =>6 * 5! (120 * 6 = 720)
                              =>5 * 4! (5 * 24 = 120)
                                        =>4 * 3! ( 4 * 6 = 24)
                                                  =>3 * 2! (subistitui o fatorial de 2 por 2 => 2 * 3 = 6)
                                                            =>2 * 1! (1! = 1 => 2 * 1 = 2)
                                                                      => 1 condição de parada


<p>Outro problema resolvido de forma recusiva</p>
obs: a representa até 
4a1 
          => 4+ 3a1
                    => 3 + 2a1
                              => 2 + 1a1
                                        =>1 ponto de parada 

*** resolvendo

4a1 => 10
          => 4+ 6
                    => 3 + 3
                              => 2 + 1
                                        =>1




<?php
echo "<br><br>Refatorando<br>";

function fatorial($numero){
          //condição de parada
          if($numero === 1){
                    return 1;
          } return $numero * fatorial($numero - 1); //cada passada onde é retirado 1 o $numero assume um outro valor
}
echo fatorial(7) . "<br>";

