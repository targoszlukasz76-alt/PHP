<?php
$filename = 'Stringi.php';
if (file_exists($filename)) {
    echo "Plik $filename istnieje.";
} else {
    echo "Plik $filename nie istnieje.";
}
?>