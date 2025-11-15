<?php
// Création de la variable string
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
// Rotation du premier caractère à la fin
$premierCaractere = $str[0];
$resultat = substr($str, 1) . $premierCaractere;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 07 - Rotation des caractères</title>
    <link rel="stylesheet" href="job07.css">
</head>
<body>
    <div class="container">
        <h1>Job 07 - Rotation des caractères</h1>
        <div class="results">
            <div class="original">
                <strong>Texte original :</strong><br />
                <?php echo $str; ?>
            </div>
            <div class="arrow">🔄</div>
            <div class="rotated">
                <strong>Texte après rotation :</strong><br />
                <?php echo $resultat; ?>
            </div>
            <div class="explanation">
                <strong>Explication :</strong><br />
                Premier caractère "<span class="highlight"><?php echo $premierCaractere; ?></span>" déplacé à la fin
            </div>
        </div>
    </div>
</body>
</html>
