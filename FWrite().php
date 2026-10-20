<?php
    $myfile = fopen("Lukasz.txt", "w")or die("Nie można otworzyć pliku!");
    $txt = "John Doe \n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>