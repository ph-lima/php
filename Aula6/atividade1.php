<?php 
class veiculo {
    public $placa;
    public $modelo; 
    public $marca; 
    public $ano; 
    public function __construct($placa, $modelo, $marca, $ano){
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->ano = $ano; 
    }

    public function exibirDetalhes(){
        echo "Placa:".$this->placa. "<br>"; 
        echo "Modelo:".$this->modelo. "<br>"; 
        echo "Marca:".$this->marca. "<br>"; 
        echo "Ano:".$this->ano. "<br>"; 
    }

    public function acelerar(){
        echo "acelerando";
    }

    public function freiar(){
        echo "freiando";
    }
    public function buzinar(){
        echo "buzinando";
    }
}

class carro extends veiculo {
    public function __construct($placa, $modelo, $marca, $ano){
        parent::__construct($placa, $modelo, $marca, $ano);
    }
    public function exibirDetalhes(){
        parent::exibirDetalhes();
    }
}

class moto extends veiculo {
    public function __construct($placa, $modelo, $marca, $ano){
        parent::__construct($placa, $modelo, $marca, $ano);
    }
    public function exibirDetalhes(){
        parent::exibirDetalhes();
    }
}

$carro1 = new carro("NQC6738", "classic", "chevrolet", "2010");
$moto1 = new moto("MOF6929", "NXR 150 BROSS", "Honda", "2010"); 
$moto1->exibirDetalhes();
$carro1->exibirDetalhes();
?>