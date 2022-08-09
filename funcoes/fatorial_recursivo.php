<div class="titulo">Fatorial recursivo</div>
<p>Resolvendo de forma recursiva (quebrando o problema inicial no mesmo problema porém, menores)</p>
7! = 5040
          =>7 * 6! (720 * 7 = 5040)
                    =>6 * 5! (120 * 6 = 720)
                              =>5 * 4! (5 * 24 = 120)
                                        =>4 * 3! ( 4 * 6 = 24)
                                                  =>3 * 2! (subistitui o fatorial de 2 por 2 => 2 * 3 = 6)
                                                            =>2 * 1! (1! = 1 => 2 * 1 = 2)
                                                                      => 1 condição de parada
