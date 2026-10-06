<?php
    $data1 = mktime(0,0,0,10,12,2007);
    $sekundy = 24*60*60;
    $minuty = 24*60;
    $godziny = 7*24;
    echo "Data 1: " . ($data1 / $sekundy). "<br>";
    echo "Sekundy: " . $sekundy . "<br>";
    echo "Minuty: " . $minuty . "<br>";
    echo "Godziny: " . $godziny . "<br>";
?>