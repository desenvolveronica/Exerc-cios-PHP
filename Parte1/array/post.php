<div class="titulo">$_POST</div>

<form form action="#" method="post">
        <input type="text" name="nome" placeholder="Nome">   <!-- Através do name que serve como chave para envio dos parâmetros -->
        <input type="text" name="sobrenome" placeholder="Sobrenome">

          <div selecao>
          <select selecao name="estado" id="">
                    <option value="AC">ACRE</option>
                    <option value="BA">BAHIA</option>
          </select>
                    <button enviar>Enviar</button>
          </div>
</form>

<?php
print_r($_POST['nome']);
echo ' ';
print_r($_POST['sobrenome']);
echo ' ';
print_r($_POST['estado']);
echo ' ';
echo count($_POST);


?>
<style>
          form > * {
                    font-size: 1.3rem;
          }
          [enviar]{
                    background-color: pink;
                    
          }
          [selecao], button{
                    font-size: 1.6rem;
                    margin: 10px 20px
          }



</style>