<?php 
//array com chave => valor
$listaAlunoIdade = array(
    "Leonardo" => 31, 
    "Gabriella" => 27,
    "Bianca" => 07
);
//array com chave
$listaCores = array(
    "Vermelho", 
    "Amarelo", 
    "Verde", 
    "Laranja"
);
//acesso ao item da chave
echo $listaAlunoIdade["Leonardo"];

echo "<br />";

echo $listaCores[2];

echo "<br />";
//exibe todo o conteúdo
var_dump($listaAlunoIdade);

echo "<br />";

var_dump($listaCores)
?>