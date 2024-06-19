<?php

$nome = 'Fulano';

switch ($nome) {
        case 'Fulano':
        echo ' E ai Fulano';
            break;

        case 'Sicrano':
            echo 'E ai Sicrano!';
            break;
        case 'Beltrano':
            echo 'E ai Beltrano!';
            break;

            default:
            echo 'Qual seu nome?';
            break;

      // Resultado é: E ai Fulano!
}

?>