<?php
$a1 = array(0 =>"red", 1 => "green", 2 => "blue", 3 => "cyan");
$a2 = array(0 => "yellow", 1 => "brown");
array_splice($a1, 2, 0, $a2);
print_r($a1);
?>