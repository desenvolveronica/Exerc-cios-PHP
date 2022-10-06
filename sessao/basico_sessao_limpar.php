<?php

echo "Function responsável por destruir uma sessão <br> 'session_destroy()'";
echo "Antes de chamar o destroy precisamos obrigatoriamente chamar o start e inicializar a sessão";

session_start();
session_destroy();
header('location: http://localhost/sessao/basico_sessao.php');
echo "Ao ler a linha header, será direcionado para este caminho";


