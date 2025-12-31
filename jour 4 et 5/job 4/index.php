<?php
// Aucun traitement nécessaire en amont, on affichera directement $_POST
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 04 - Tableau POST</title>
    <link rel="stylesheet" href="job4.css">
</head>
<body>
    <div class="container">
        <h1>Job 04 - Affichage des arguments POST</h1>
        
        <div class="form-section">
            <h2>Formulaire de test</h2>
            <form method="POST" action="">
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
        
        <?php if (count($_POST) > 0): ?>
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
                    // Parcourir tous les arguments POST
                    foreach ($_POST as $argument => $valeur) {
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