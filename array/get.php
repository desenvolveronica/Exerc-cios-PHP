<div class="titulo">$_GET</div>

<?php
echo '<p class="divisao">Para colocar informações em uma requisição tipo GET</p><hr><br>';
echo '<p comentario>Passa os parâmetros da requisiçaõ</p>';
echo '<br>';
echo '<p comentario1>Coloca ? e ai você consegue passsar os parêmetros ex:nome=veronica</p>';
echo '<br>';
echo '<p comentario1>Coloca o & para passar mais outro par/âmetro ex:nome=veronica&casa=b</p>';
echo '<br>';
echo "{$_GET['nome']}"; //resposta: Array ( [nome] => diva )
echo '<br>';
print_r($_GET);
echo '<br>';




?>
<style>
          [comentario]{
                    margin-top: -35px;
          }
          [comentario1]{
                    margin-top: -60px
          }
</style>