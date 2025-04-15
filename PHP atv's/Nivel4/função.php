<?php
function ehPrimo($numero) {

    if ($numero <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; 
        }
    }
    return true; 
}

$numeros = [1, 2, 3, 4, 5, 16, 17, 18, 19, 20];

echo "Verificando se os números são primos:\n";
foreach ($numeros as $numero) {
    if (ehPrimo($numero)) {
        echo $numero . " é primo.\n";
    } else {
        echo $numero . " não é primo.\n";
    }
}
?>
