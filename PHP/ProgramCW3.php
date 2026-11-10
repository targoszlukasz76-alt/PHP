<?php
$owoce = array("banan","arbuz","jablko","truskawka");
echo "Owoce w tablicy: <br>";
echo "<ol>";
for($i = 0; $i < count($owoce); $i ++) {
    echo "<li>".$owoce[$i]."</li>";
}
echo "</ol>";
?>