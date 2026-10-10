<?php
$notes = ["Amine" => 12, "Sara" => 16, "Youssef" => 8, "Lina" => 14, "Adam" => 10];
$somme = 0; $valides = 0; $meilleureNote = -1; $nomMeilleur = "";

echo "<table border='1'><tr><th>Nom</th><th>Note</th><th>Statut</th></tr>";
foreach ($notes as $nom => $note) {
    $statut = ($note >= 10) ? "Validé" : "Non validé";
    if ($note >= 10) $valides++;
    $somme += $note;
    if ($note > $meilleureNote) { $meilleureNote = $note; $nomMeilleur = $nom; }
    echo "<tr><td>$nom</td><td>$note</td><td>$statut</td></tr>";
}
echo "</table>";

echo "<p>Moyenne: " . ($somme / count($notes)) . "</p>";
echo "<p>Validés: $valides</p>";
echo "<p>Meilleure note: $meilleureNote ($nomMeilleur)</p>";
?>