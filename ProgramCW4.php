<?php
$owoce = array(
    array("Banan",10),
    array("Arbuz",5),
    array("Jablko",4),
    array("Truskawka",20));
echo"Owoce asocjacyjne <br>";
echo"<ul>";
for($i = 0; $i <count($owoce); $i++){
    echo "<li>".$owoce[$i][0]." ".$owoce[$i][1]."</li>";
}
echo"</ul>";
?>