<?php
$cars = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo "<table>\n";
echo "<tr><td>Car</td><td>In stock</td></tr>\n";
echo "<tr><td>".$cars[0][0]."</td><td>".$cars[0][1]."</td></tr>\n";
echo "<tr><td>".$cars[1][0]."</td><td>".$cars[1][1]."</td></tr>\n";
?>
