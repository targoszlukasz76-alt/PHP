<?php
 $a = 2;
 for($b = 1; $b <= 20; $a++){
    while($a % 2 == 0){
        echo "$a | liczba : $b jest parzysta <br>";
        $b++;
        break;
    }
 } 
?>