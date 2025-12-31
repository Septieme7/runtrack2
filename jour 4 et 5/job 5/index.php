<?php
// Variable pour stocker le message
$message = "";

// Vérifier si le formulaire a été soumis
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Vérifier les identifiants
    if ($username == "John" && $password == "Rambo") {
        $message = "C'est pas ma guerre";
        $messageClass = "success";
    } else {
        $message = "Votre pire cauchemar ou est le Password?";
        $messageClass = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 05 - Connexion</title>
    <link rel="stylesheet" href="job5.css">
</head>
<body>
    <div class="container">
        <h1>Job 05 - Formulaire de connexion</h1>
        
        <div class="form-section">
            <h2>🔒 Authentification</h2>
            <p class="hint">Utilisez POST pour plus de sécurité (les données ne sont pas visibles dans l'URL)</p>
            
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" id="username" name="username" placeholder="Entrez votre username" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password" placeholder="Entrez votre password" required>
                </div>
                
                <button type="submit" class="submit-btn">Se connecter</button>
            </form>
        </div>
        
        <?php if ($message != ""): ?>
        <div class="results">
            <div class="message-box <?php echo $messageClass; ?>">
                <?php echo $message; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>