<?php
//att1
$idade = 17;

if ($idade <18) {
    echo "Voce não pode entar aqui";
} else {
    echo "seja bem vindo";
}

?>

<?php
//att2
$idade = 21;
$identidade = true;

if ($idade > 18 && $identidade == true) {
    echo "seja bem vindo!";
}
?>

<?php
//att3
$idade = 18;
if ($idade > 18) {
echo "Você é maior de idade.";
} elseif ($idade == 18) {
echo "Você acaba de atingir a maioridade.";
} else {
echo "Você é menor de idade.";
}
?>

