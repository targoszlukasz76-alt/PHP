<?php
$czas = time();
$matura= mktime(10,0,0,5,6,2027);
echo $czas . "<br>";
echo $matura . "<br>";
echo "Matura odbędzie się za " . ($matura - $czas) . " sekund";
?>