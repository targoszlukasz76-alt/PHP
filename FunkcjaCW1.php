<?php
    //Napisz funkcję, która zwraca sumę elemntów tablicy.
    function suma(){
    $elementy = array(1,2,3,4,5);
    $suma = 0;
    for($i=0;$i<count($elementy);$i++){
        $suma += $elementy[$i];
        }
    return $suma;
    }
    echo suma();

    //Wykorzystanie foreach 
    function suma2(){
    $elementy = array(1,2,3,4,5);
    $suma2 = 0;
    foreach($elementy as $element){
        $suma2 += $element;
        }
    return $suma2;
    }
    echo suma2();
?>
