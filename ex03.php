<?php
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

$prixHT = 60;
$quantite = 3;

$totalHT = $prixHT * $quantite;
$montantTVA = $totalHT * (TAUX_TVA / 100);
$totalTTC = $totalHT + $montantTVA;
$totalTTC += 15;

echo "Total HT: $totalHT " . DEVISE . "<br>";
echo "TVA: $montantTVA " . DEVISE . "<br>";
echo "Total TTC (avec livraison): $totalTTC " . DEVISE . "<br>";

if (defined("TAUX_TVA")) {
    echo "La constante TAUX_TVA existe.";
}
?>