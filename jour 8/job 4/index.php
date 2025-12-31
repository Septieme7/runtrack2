<?php

// Déconnexion
if (isset($_POST["deco"])) {
    setcookie("prenom", "", time() - 3600);
    unset($_COOKIE["prenom"]);
}

// Connexion
if (isset($_POST["connexion"]) && $_POST["prenom"] != "") {
    setcookie("prenom", $_POST["prenom"], time() + 3600);
    $_COOKIE["prenom"] = $_POST["prenom"];
}

?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">

<body>

<?php if (!isset($_COOKIE["prenom"])): ?>

    <form method="POST">
        <input type="text" name="prenom" placeholder="Votre prénom">
        <button type="submit" name="connexion">Connexion</button>
    </form>

<?php else: ?>

    <p>Bonjour <?= $_COOKIE["prenom"] ?> !</p>

    <form method="POST">
        <button type="submit" name="deco">Déconnexion</button>
    </form>

<?php endif; ?>

</body>
</html>
