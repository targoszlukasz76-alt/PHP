Napisz funkjcję która wyszuka w tablicy największy element i zwróci jego indeks.

<?php
function znajdzMAX($tablica){
    $max_indeks = 0;
    for($i = 1; $i <count($tablica); $i++){
        if($tablica[$i] > $tablica[$max_indeks]){
            $max_indeks = $i;
        }
    }
    return $max_indeks;
}
$tablica = array(1, 2, 3, 4, 5);
$indeks = znajdzMAX($tablica);
echo "Największy element w tablicy to: $tablica[$indeks]. Jego indeks to: $indeks.";
?>