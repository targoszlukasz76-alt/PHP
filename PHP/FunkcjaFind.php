<?php
function znajdzElement($tablica, $element){
    for($i = 0; $i<count($tablica);$i++){
        if($tablica[$i] == $element){
            return $i; // zwraca indeks elementu jeśli został znaleziony
        }
    }
    return -1; // zwraca -1 jeśli element nie został znaleziony
}
$tablica = array(1, 2, 3, 4, 5);
$element = 3;
$indeks = znajdzElement($tablica, $element);
if($indeks != -1){
    echo "Element $element został znaleziony na indeksie $indeks.";
} else {
    echo "Element $element nie został znaleziony w tablicy.";
}
?>