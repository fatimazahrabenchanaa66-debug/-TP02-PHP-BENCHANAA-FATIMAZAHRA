
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat POST</title>
</head>
<body>

    <?php
    $nom = htmlspecialchars($_POST['nom'] ?? '');
    $prenom = htmlspecialchars($_POST['prenom'] ?? '');
    $groupe = htmlspecialchars($_POST['groupe'] ?? '');

    echo "Bienvenue " . $prenom . " " . $nom .
         ", vous êtes dans le groupe " . $groupe . ".";
    ?>

</body>
</html>
