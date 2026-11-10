<p>Zamiana elementów </p>
<?php
$a1 = array(0 => "red", 1 => "green", 2 => "blue", 3 => "cyan");
$a2 = array(4 => "yellow", 5 => "brown");
array_splice($a1, 0, 2, $a2);
print_r($a1);
?>