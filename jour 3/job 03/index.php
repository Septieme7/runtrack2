<?php
// Création de la variable string
$str = "I'm sorry Dave I'm afraid I can't do that";

// Variable pour stocker le résultat
$resultat = "";

// Tableau contenant les voyelles (minuscules et majuscules)
$voyelles = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');

// Parcours de la chaîne caractère par caractère
for ($i = 0; $i < strlen($str); $i++) {
    $caractere = $str[$i];
    
    // Vérification si le caractère est une voyelle
    $estVoyelle = false;
    for ($j = 0; $j < count($voyelles); $j++) {
        if ($caractere == $voyelles[$j]) {
            $estVoyelle = true;
            break;
        }
    }
    
    // Si c'est une voyelle, on l'ajoute au résultat
    if ($estVoyelle) {
        $resultat .= $caractere;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 03 - Affichage des voyelles</title>
    <link rel="stylesheet" href="job03.css">
</head>
<body>
    <div class="container">
        <h1>Job 03 - Extraction des voyelles</h1>
        <div class="results">
            <div class="original">
                <strong>Texte original :</strong><br />
                <?php echo $str; ?>
            </div>
            <div class="filtered">
                <strong>Voyelles uniquement :</strong><br />
                <?php echo $resultat; ?>
            </div>
        </div>
    </div>
</body>
</html>