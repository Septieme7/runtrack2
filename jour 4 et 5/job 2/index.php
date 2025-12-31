<?php
// Aucun traitement nécessaire en amont, on affichera directement $_GET
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 02 - Tableau GET</title>
    <link rel="stylesheet" href="job02.css">
</head>
<body>
    <div class="container">
        <h1>Job 02 - Affichage des arguments GET</h1>
        
        <div class="form-section">
            <h2>Formulaire de test</h2>
            <form method="GET" action="">
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Ex: Stephane">
                </div>
                
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" placeholder="Ex: Dupont">
                </div>
                
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" id="email" name="email" placeholder="Ex: email@exemple.com">
                </div>
                
                <button type="submit" class="submit-btn">Envoyer</button>
            </form>
        </div>
        
        <?php if (count($_GET) > 0): ?>
        <div class="results">
            <h2>Résultat</h2>
            <table>
                <thead>
                    <tr>
                        <th>Argument</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Parcourir tous les arguments GET
                    foreach ($_GET as $argument => $valeur) {
                        echo "<tr>";
                        echo "<td>" . $argument . "</td>";
                        echo "<td>" . $valeur . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>