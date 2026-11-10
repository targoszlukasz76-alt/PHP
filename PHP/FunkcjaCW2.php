<?php
//Wykorzystanie while
function suma3(){
    $elementy = array(1,2,3,4,5);
    $suma3 = 0;
    $i = 0;
    while($i < count($elementy)){
        $suma3 += $elementy[$i];
        $i++;
    }
    return $suma3;
    }
echo suma3();
?>