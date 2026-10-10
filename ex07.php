<?php
$nombre = 7;
echo "<h3>Table de multiplication de $nombre</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo "$nombre x $i = " . ($nombre * $i) . "<br>";
}

echo "<h3>Pyramide</h3><pre>";
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
echo "</pre>";
?>