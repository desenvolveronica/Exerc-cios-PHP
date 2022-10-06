<?php

echo "Function responsável por destruir uma sessão <br> 'session_destroy()'";
session_destroy();
header('location: http://localhost/exercicio.php?dir=sessao&file=basico_sessao');
echo "Ao ler a linha header, será direcionado para este caminho";


