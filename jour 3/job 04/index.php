<?php
// Création de la variable string
$str = "Dans l'espace, personne ne vous entend crier, C chiant ça...";
// Compte le nombre de caractères avec strlen()
$nombreCaracteres = strlen($str);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 04 - Comptage de caractères</title>
    <link rel="stylesheet" href="job04.css">
</head>
<body>
    <div class="container">
        <h1>Job 04 - Comptage de caractères</h1>
        <div class="results">
            <div class="original">
                <strong>Texte analysé :</strong><br />
                <?php echo $str; ?>
            </div>
            <div class="count">
                <strong>Nombre de caractères :</strong><br />
                <span class="number"><?php echo $nombreCaracteres; ?></span>
            </div>
        </div>
    </div>
</body>
</html>
