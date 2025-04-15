<?php
$numeros = [1, 4, 7, 10, 12, 15, 18, 20, 23, 30];

function contarPares($arr) {
    $contador = 0; 
    foreach ($arr as $numero) {
        if ($numero % 2 == 0) {
            $contador++; 
        }
    }
    return $contador;
}

echo "A quantidade de números pares no array é: " . contarPares($numeros);
?>
