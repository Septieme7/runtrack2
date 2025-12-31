<?php
// Comptage du nombre d'arguments GET
$nombreArguments = 0;

// Parcourir le tableau $_GET pour compter les arguments
foreach ($_GET as $cle => $valeur) {
    $nombreArguments++;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 01 - Comptage GET</title>
    <link rel="stylesheet" href="job01.css">
</head>
<body>
    <div class="container">
        <h1>Job 01 - Comptage des arguments GET</h1>
        
        <div class="form-section">
            <h2>Formulaire de test</h2>
            <form method="GET" action="">
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom">
                </div>
                
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom">
                </div>
                
                <div class="form-group">
                    <label for="age">Âge :</label>
                    <input type="text" id="age" name="age" placeholder="Entrez votre âge">
                </div>
                
                <div class="form-group">
                    <label for="ville">Ville :</label>
                    <input type="text" id="ville" name="ville" placeholder="Entrez votre ville">
                </div>
                
                <button type="submit" class="submit-btn">Envoyer</button>
            </form>
        </div>
        
        <?php if ($nombreArguments > 0): ?>
        <div class="results">
            <h2>Résultat</h2>
            <div class="result-box">
                Le nombre d'argument GET envoyé est : <span class="count"><?php echo $nombreArguments; ?></span>
            </div>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>