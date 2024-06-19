<?php

function calcularDobro($numero) {
  return $numero * 2;
}

$cont = 2000;

do {
  $dobro = calcularDobro($cont);
  echo "O dobro de $cont é $dobro";
  $cont++;
} while ($cont <= 1999);

?>