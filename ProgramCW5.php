<?php
$owoce = array(
    array("banan",10),
    array("arbuz",5),
    array("jablko",4),
    array("truskawka",20),
);
echo"<table border = 1>";
echo"<tr>";
for($i= 0; $i < count($owoce); $i ++){
    echo "<td>".$owoce[$i][0]." : ".$owoce[$i][1]." Zł "."</td>"."<br>";
}
echo"</tr>";
echo"</table>";
?>