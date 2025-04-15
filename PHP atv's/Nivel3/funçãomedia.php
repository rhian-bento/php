<?php
 function media($num1, $num2, $num3){
     $sum = $num1 + $num2 + $num3;
 
     $media = $sum/3;
 
     return $media;
 }
 
 echo(media(20,3,58));