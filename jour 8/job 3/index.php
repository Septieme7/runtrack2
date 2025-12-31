<?php
session_start();

// Ajouter un prénom
if (isset($_POST["prenom"]) && $_POST["prenom"] != "") {
    $_SESSION["prenoms"][] = $_POST["prenom"];
}

// Reset
if (isset($_POST["reset"])) {
    $_SESSION["prenoms"] = [];
}
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">

<body>

<form method="POST">
    <input type="text" name="prenom" placeholder="Votre prénom">
    <button type="submit">Envoyer</button>
</form>

<form method="POST">
    <button type="submit" name="reset">Reset</button>
</form>

<h2>Liste des prénoms :</h2>

<ul>
<?php
if (isset($_SESSION["prenoms"])) {
    foreach ($_SESSION["prenoms"] as $p) {
        echo "<li>$p</li>";
    }
}
?>
</ul>

</body>
</html>
