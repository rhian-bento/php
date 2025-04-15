<?php
 
 function encontrarMaiorNumero($numeros){
 
     $maior = $numeros[0]; 
 
     for ($i = 1; $i < count($numeros); $i++) {
         if ($numeros[$i] > $maior) {
             $maior = $numeros[$i]; 
         }
     }
 
     return $maior;
 }
 
 $meuArrayDeNumeros = [15, 7, 23, 9, 42];
 $maiorNumero = encontrarMaiorNumero($meuArrayDeNumeros);
 
 echo "O maior número do array é: " + $maiorNumero;