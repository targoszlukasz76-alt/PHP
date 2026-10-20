<?php
    $myfile = fopen("Lukasz.txt", "r")or die("Unable to open file!");
    echo fread($myfile,filesize("Lukasz.txt"));
    fclose($myfile);
?>