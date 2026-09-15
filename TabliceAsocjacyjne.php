<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo $age["Peter"]; // outputs 35
    $age2 = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
    print_r($age);
    print_r($age2);
    $age3 = [];
    $age3["Peter"] = "35";
    $age3["Ben"] = "37";
    $age3["Joe"] = "43";
    print_r($age3);
?>