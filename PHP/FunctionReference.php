<?php
    $value = 5;
    function functionValue(&$value){
        $value++;
        echo $value."<br>";
    }
    functionValue($value);
    echo $value;
?>