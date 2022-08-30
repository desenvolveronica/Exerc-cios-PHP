<div class="titulo">Polimorfismo</div>

<?

echo "Uma classe ABSTRATA não pode ser instanciada. Somente HERDADE <br>";
echo "Significa que em uma TIPAGEM pode receber qualquer um do mesmo tipo OU filho deste tipo <br>";
abstract class Comida {
          public $peso;
}

class Arroz extends Comida {

}
class Feijao extends Comida {
          
}
class Sorvete extends Comida {
          
}

class ArrozAgrega extends Arroz {

}

class Pessoa123 {

          public $peso;

          function __construct($peso){
                    $this->peso = $peso;
          }

          public function comer(Arroz $comida){  //tipagem do parâmetro, neste caso, recebe instâncias do tipo Arroz 
                    $this->peso += $comida->peso;
                    //comida herdando de Arroz
          }
}

$c1 = new Arroz;
$c1-> peso = 0.45;

$c2 = new ArrozAgrega;
$c2-> peso = 0.25;

$c3 = new Sorvete;
$c3-> peso = 0.13;

$p = new Pessoa123(58.32);
$p->comer($c1);
$p->comer($c2);
echo $p->peso , '<br>'; 

// $p->comer($c2); ERRO POIS ELE NAO PODE RECEBER INSTÂNCIA DO TIPO FEIJAO



