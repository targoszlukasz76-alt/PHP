<?php
    //mktime(hour, minute, second, month, day, year);
    $czas = mktime(11,53,0, 10, 6, 2026);
    echo "Created date is " . date("Y-m-d h:i:sa", $czas) . "<br>";
?>