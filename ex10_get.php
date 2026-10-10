<?php
if (isset($_GET['nom'], $_GET['prenom'], $_GET['groupe'])) {
    $nom = trim($_GET['nom']); $prenom = trim($_GET['prenom']); $groupe = trim($_GET['groupe']);
    if (empty($nom) || empty($prenom) || empty($groupe)) {
        echo "Veuillez remplir tous les champs.";
    } else {
        echo "Bienvenue " . htmlspecialchars($prenom) . " " . htmlspecialchars($nom) . " du groupe " . htmlspecialchars($groupe);
    }
} else {
    echo "Veuillez soumettre le formulaire GET.";
}
?>