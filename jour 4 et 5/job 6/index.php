<?php
// Variable pour stocker le résultat
$resultat = "";

// Vérifier si le formulaire a été soumis
if (isset($_GET["nombre"])) {
    $nombre = $_GET["nombre"];
    
    // Vérifier si le nombre est pair ou impair
    if ($nombre % 2 == 0) {
        $resultat = "Nombre pair";
        $resultatClass = "pair";
    } else {
        $resultat = "Nombre impair";
        $resultatClass = "impair";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 06 - Pair ou Impair</title>
    <link rel="stylesheet" href="job6.css">
</head>
<body>
    <div class="container">
        <h1>Job 06 - Détection Pair/Impair</h1>
        
        <div class="form-section">
            <h2>🔢 Testez un nombre</h2>
            
            <form method="GET" action="">
                <div class="form-group">
                    <label for="nombre">Nombre :</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Entrez un nombre" required>
                </div>
                
                <button type="submit" class="submit-btn">Vérifier</button>
            </form>
        </div>
        
        <?php if ($resultat != ""): ?>
        <div class="results">
            <div class="result-box <?php echo $resultatClass; ?>">
                <?php echo $resultat; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>