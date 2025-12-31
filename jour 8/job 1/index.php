<?php
session_start();

// Reset si bouton cliqué
if (isset($_POST["reset"])) {
    $_SESSION["nbvisites"] = 0;
}

// Incrémentation
if (!isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 1;
} else {
    $_SESSION["nbvisites"]++;
}
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">

<body>

<p>Nombre de visites : <?= $_SESSION["nbvisites"] ?></p>

<form method="POST">
    <button type="submit" name="reset">Reset</button>
</form>

</body>
</html>
