<?php
// Création de la variable string
$str = "Les choses que l'on possède finissent par nous posséder.";
// Variable pour stocker le résultat inversé
$resultat = "";
// Parcourir la chaîne à l'envers
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $resultat .= $str[$i];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 06 - Chaîne inversée</title>
    <link rel="stylesheet" href="job06.css">
</head>
<body>
    <div class="container">
        <h1>Job 06 - Inversion de chaîne</h1>
        <div class="results">
            <div class="original">
                <strong>Texte original :</strong><br />
                <?php echo $str; ?>
            </div>
            <div class="arrow">⬇</div>
            <div class="reversed">
                <strong>Texte inversé :</strong><br />
                <?php echo $resultat; ?>
            </div>
        </div>
    </div>
</body>
</html>
