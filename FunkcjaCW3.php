<?php
    function WybParz(){
    $elementy = array(1,2,3,4,5,6,7,8,9,10);
    for($i=0;$i<count($elementy);$i++){
        if($elementy[$i]%2==0){
            echo $elementy[$i]."<br>";
        }
    }
    }
echo WybParz();
?>