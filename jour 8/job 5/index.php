<?php
session_start();

// Initialisation
if (!isset($_SESSION["grid"])) {
    $_SESSION["grid"] = ["-", "-", "-", "-", "-", "-", "-", "-", "-"];
    $_SESSION["player"] = "X";
}

// Reset manuel
if (isset($_POST["reset"])) {
    $_SESSION["grid"] = ["-", "-", "-", "-", "-", "-", "-", "-", "-"];
    $_SESSION["player"] = "X";
}

// Coup du joueur
for ($i = 0; $i < 9; $i++) {
    if (isset($_POST["cell$i"]) && $_SESSION["grid"][$i] == "-") {
        $_SESSION["grid"][$i] = $_SESSION["player"];
        $_SESSION["player"] = ($_SESSION["player"] == "X") ? "O" : "X";
    }
}

// Vérifier les victoires
$w = [
    [0,1,2],[3,4,5],[6,7,8], // lignes
    [0,3,6],[1,4,7],[2,5,8], // colonnes
    [0,4,8],[2,4,6]          // diagonales
];

foreach ($w as $c) {
    if ($_SESSION["grid"][$c[0]] != "-" &&
        $_SESSION["grid"][$c[0]] == $_SESSION["grid"][$c[1]] &&
        $_SESSION["grid"][$c[1]] == $_SESSION["grid"][$c[2]]) {

        $g = $_SESSION["grid"][$c[0]];
        echo "<p>$g a gagné !</p>";

        $_SESSION["grid"] = ["-", "-", "-", "-", "-", "-", "-", "-", "-"];
        $_SESSION["player"] = "X";
    }
}

// Match nul ?
if (!in_array("-", $_SESSION["grid"])) {
    echo "<p>Match nul</p>";
    $_SESSION["grid"] = ["-", "-", "-", "-", "-", "-", "-", "-", "-"];
    $_SESSION["player"] = "X";
}

?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">

<body>

<h2>Morpion</h2>

<form method="POST">
<table border="1" cellpadding="15">
    <?php for ($i = 0; $i < 9; $i++): ?>
        <?php if ($i % 3 == 0) echo "<tr>"; ?>
        
        <td>
            <?php if ($_SESSION["grid"][$i] == "-"): ?>

                <button type="submit" name="cell<?= $i ?>">-</button>

            <?php else: ?>

                <?= $_SESSION["grid"][$i] ?>

            <?php endif; ?>
        </td>

        <?php if ($i % 3 == 2) echo "</tr>"; ?>
    <?php endfor; ?>
</table>

<br>
<button name="reset">Réinitialiser la partie</button>
</form>

</body>
</html>
