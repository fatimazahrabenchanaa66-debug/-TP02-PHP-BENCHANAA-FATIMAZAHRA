<?php
// Partie 1
$i = 0;
while ($i <= 20) {
    echo ($i == 10) ? "<b>10</b> " : "$i ";
    $i += 2;
}

// Partie 2
$compteur = 5; $countWhile = 0;
while ($compteur < 5) { $countWhile++; $compteur++; }

$compteur = 5; $countDo = 0;
do { $countDo++; $compteur++; } while ($compteur < 5);

echo "<br>While: $countWhile | Do-While: $countDo <br>";

// Partie 3
for ($k = 1; $k <= 20; $k++) {
    if ($k >= 16) break;
    if ($k % 3 == 0) continue;
    echo "$k ";
}
?>