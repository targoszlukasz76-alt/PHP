<?php
$b = 1;
for($a = 40; $a >= 2 ; $a-= 2, $b += 1){
    while($a % 2 == 0){
        echo"$a | liczba : $b <br>";
        break;
    }
}
?>