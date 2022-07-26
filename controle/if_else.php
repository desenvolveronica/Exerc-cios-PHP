<div class="titulo">If Else</div>

<?php
if(true){
    echo 'Impresso se verdadeiro <br>';
}else{
    echo 'Impresso se falso <br>';
}

if(true) echo 'Sem o bloco <br>';

if(false)
    echo 'Se verdadeiro sem bloco <br>';
    echo 'Se falso sem bloco e sem colocar ELSE<br>';

if(false)
    echo 'Mostra se for verdadeiro sem usar o bloco <br>';
else 
    echo 'Mostra se falso sem usar o bloco, mas colocando ELSE <br>';

//else if 

if(false){
    echo 'Passo A <br>';
}else if(false){
    echo 'Caiu no Else If';
}elseif(true){   //o else e if  podem ser escritos juntos ou separados
    echo 'Chegando no segundo else if <br>';
}
else {
    echo 'Último passo <br>';
}
