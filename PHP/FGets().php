<?php
    $myfile = fopen("Lukasz.txt", "r") or die("Nie można otworzyć pliku!");
    echo fgets($myfile);
    fclose($myfile);
?>