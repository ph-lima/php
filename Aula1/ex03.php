<?php
//lista de produtos
$produtos = [
    "maçã" => 2.99,
    "banana" => 1.99,
    "uva" => 1.99, 
    "melancia" => 2.99
];
//mostrar a lista 
echo "Lista de produtos: ";
foreach ($produtos as $produto => $valor) {
    echo "$produto custa R$$valor";
};
?>
