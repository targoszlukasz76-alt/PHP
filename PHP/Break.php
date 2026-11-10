<?php
echo " break przerywa działani pentli <br>";

for($i = 0; $i<10; $i++){
    echo "liczba: $i <br>";
    if($i == 5)
        break;
}
echo "Koniec pęntli";
?>