<p>Dodanie elmentów </p>
<?php
$a1 = array(0,1,2,3,4);
$a2 = array(5,6);
array_splice($a1,1,0,$a2);
print_r($a1);
?>