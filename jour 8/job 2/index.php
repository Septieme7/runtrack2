<?php

// Reset
if (isset($_POST["reset"])) {
    setcookie("nbvisites", 0, time() + 3600);
    $_COOKIE["nbvisites"] = 0;
}

// Incrémentation
if (!isset($_COOKIE["nbvisites"])) {
    setcookie("nbvisites", 1, time() + 3600);
    $count = 1;
} else {
    $count = $_COOKIE["nbvisites"] + 1;
    setcookie("nbvisites", $count, time() + 3600);
}
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">

<body>

<p>Nombre de visites : <?= $count ?></p>

<form method="POST">
    <button type="submit" name="reset">Reset</button>
</form>

</body>
</html>
