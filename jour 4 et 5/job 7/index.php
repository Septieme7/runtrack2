<?php
// Variables pour stocker les dimensions
$largeur = 0;
$hauteur = 0;
$maison = "";

// Vérifier si le formulaire a été soumis
if (isset($_GET["largeur"]) && isset($_GET["hauteur"])) {
    $largeur = $_GET["largeur"];
    $hauteur = $_GET["hauteur"];
    
    // Construction du toit (triangle)
    for ($ligne = 0; $ligne < $hauteur; $ligne++) {
        // Calculer le nombre d'espaces avant le toit
        $espaces = $hauteur - $ligne - 1;
        
        // Ajouter les espaces
        for ($i = 0; $i < $espaces; $i++) {
            $maison .= "&nbsp;";
        }
        
        // Ajouter les slashes du toit
        $maison .= "/";
        
        // Calculer le nombre d'underscores au milieu
        $underscores = $ligne * 2;
        for ($i = 0; $i < $underscores; $i++) {
            $maison .= "_";
        }
        
        // Ajouter le backslash
        $maison .= "\\<br>";
    }
    
    // Construction des murs (rectangle)
    for ($ligne = 0; $ligne < $hauteur; $ligne++) {
        $maison .= "|";
        
        // Ajouter les espaces ou underscores pour la largeur
        for ($i = 0; $i < $largeur; $i++) {
            if ($ligne == $hauteur - 1) {
                // Dernière ligne : underscores
                $maison .= "_";
            } else {
                // Autres lignes : espaces
                $maison .= "&nbsp;";
            }
        }
        
        $maison .= "|<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 07 - Maison ASCII</title>
    <link rel="stylesheet" href="job7.css">
</head>
<body>
    <div class="container">
        <h1>Job 07 - Générateur de Maison ASCII</h1>
        
        <div class="form-section">
            <h2>🏠 Construisez votre maison</h2>
            
            <form method="GET" action="">
                <div class="form-row">
                    <div class="form-group">
                        <label for="largeur">Largeur :</label>
                        <input type="text" id="largeur" name="largeur" placeholder="Ex: 10" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="hauteur">Hauteur :</label>
                        <input type="text" id="hauteur" name="hauteur" placeholder="Ex: 5" required>
                    </div>
                </div>
                
                <button type="submit" class="submit-btn">Générer la maison</button>
            </form>
        </div>
        
        <?php if ($maison != ""): ?>
        <div class="results">
            <h2>Résultat (Largeur: <?php echo $largeur; ?>, Hauteur: <?php echo $hauteur; ?>)</h2>
            <div class="maison-box">
                <pre><?php echo $maison; ?></pre>
            </div>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>