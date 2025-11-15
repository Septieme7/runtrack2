<?php
// Création du tableau contenant les nombres
$nombres = array(200, 204, 173, 98, 171, 404, 459);

// Variable pour stocker le résultat
$resultat = "";

// Parcours du tableau avec une boucle foreach
foreach ($nombres as $nombre) {
    // Vérification si le nombre est pair ou impair
    // Un nombre est pair si le reste de sa division par 2 est égal à 0
    if ($nombre % 2 == 0) {
        $resultat .= $nombre . " est paire<br />";
    } else {
        $resultat .= $nombre . " est impaire<br />";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 01 - Pairs et Impairs</title>
    <link rel="stylesheet" href="job01.css">
</head>
<body>
    <div class="container">
        <h1>Job 01 - Détection des nombres pairs et impairs</h1>
        <div class="results">
            <?php echo $resultat; ?>
        </div>
    </div>
</body>
</html>