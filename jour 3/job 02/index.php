<?php
// Création de la variable string
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Variable pour stocker le résultat
$resultat = "";

// Parcours de la chaîne en affichant un caractère sur deux
// On commence à l'index 0 et on incrémente de 2 à chaque itération
for ($i = 0; $i < strlen($str); $i += 2) {
    $resultat .= $str[$i];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 02 - Un caractère sur deux</title>
    <link rel="stylesheet" href="job02.css">
</head>
<body>
    <div class="container">
        <h1>Job 02 - Affichage d'un caractère sur deux</h1>
        <div class="results">
            <div class="original">
                <strong>Texte original :</strong><br />
                <?php echo $str; ?>
            </div>
            <div class="filtered">
                <strong>Un caractère sur deux :</strong><br />
                <?php echo $resultat; ?>
            </div>
        </div>
    </div>
</body>
</html>