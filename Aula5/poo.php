<?php 
class pet{
    //atributos 
    public $raca; 
    public $especie; 
    public $idade;
    public $sexo; 
}

class cachorro extends pet{ 
    //funções e métodos 
    function latir(){
        echo "cachorro latindo";
    }
}
?> 