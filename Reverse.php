Napisz funkcję, która zmieni kolejność elementów w tablicy na odwrotną.
<?php
function odwrocTablice($tablica) {
    $odwrocona = array();
    for ($i = count($tablica) - 1; $i >= 0; $i--) {
        $odwrocona[] = $tablica[$i];
    }
    return $odwrocona;
}
$tablica = array(1, 2, 3, 4, 5);
$odwrocona = odwrocTablice($tablica);
echo "Odwrotna kolejność elementów w tablicy to: " . implode(", ", $odwrocona) . ".";
?>