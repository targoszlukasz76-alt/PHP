Napisz funkjcję która wyszuka w tablicy największy element i zwróci jego indeks.

<?php
function znajdzMAX($tablica){
    $max = $tablica[0];
    for($i = 1; $i <count($tablica); $i++){
        if($tablica[$i] > $max){
            $max = $tablica[$i];
        }
    }
    return $max;
}
$tablica = array(1, 2, 3, 4, 5);
$indeks = znajdzMAX($tablica);
echo "Największy element w tablicy to: $indeks.";
?>