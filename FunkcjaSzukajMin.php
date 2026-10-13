<?php
function znajdzMin($tablica){
    $min_indeks = 0;
    for($i = 1; $i <count($tablica); $i++){
        if($tablica[$i] < $tablica[$min_indeks]){
            $min_indeks = $i;
        }
    }
    return $min_indeks;
}
$tablica = array(23, 2, 3, 4, 5);
$indeks = znajdzMin($tablica);
echo "Najmniejszy element w tablicy to: $tablica[$indeks]. Jego indeks to: $indeks.";
?>