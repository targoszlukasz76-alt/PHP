<?php
$foo = 'Bob'; // Assign the value 'Bob' to $foo
$bar = &$foo; // Assign a reference to $foo to $bar 
$bar ='Andy';
echo $bar;
echo $foo; // $foo is altered too.
?>