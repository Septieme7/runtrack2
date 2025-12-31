<?php

// --------------------
// FONCTION GRAS
// --------------------
function gras($str) {
    $mot = "";
    $new = "";

    for ($i = 0; isset($str[$i]); $i++) {

        if ($str[$i] != " ") {
            $mot .= $str[$i];
        } else {

            if ($mot != "" && $mot[0] >= "A" && $mot[0] <= "Z") {
                $new .= "<b>" . $mot . "</b> ";
            } else {
                $new .= $mot . " ";
            }

            $mot = "";
        }
    }

    // dernier mot
    if ($mot != "" && $mot[0] >= "A" && $mot[0] <= "Z") {
        $new .= "<b>" . $mot . "</b>";
    } else {
        $new .= $mot;
    }

    return $new;
}

// --------------------
// FONCTION CESAR
// --------------------
function cesar($str, $decalage = 2) {
    $res = "";

    for ($i = 0; isset($str[$i]); $i++) {
        $c = $str[$i];

        if ($c >= "a" && $c <= "z") {
            $res .= chr((ord($c) - 97 + $decalage) % 26 + 97);
        }
        elseif ($c >= "A" && $c <= "Z") {
            $res .= chr((ord($c) - 65 + $decalage) % 26 + 65);
        }
        else {
            $res .= $c;
        }
    }

    return $res;
}

// --------------------
// FONCTION PLATEFORME
// --------------------
function plateforme($str) {
    $mot = "";
    $new = "";

    for ($i = 0; isset($str[$i]); $i++) {

        if ($str[$i] != " ") {
            $mot .= $str[$i];
        } else {

            $len = 0;
            while (isset($mot[$len])) $len++;

            if ($len >= 2 && $mot[$len-2] == "m" && $mot[$len-1] == "e") {
                $mot .= "_";
            }

            $new .= $mot . " ";
            $mot = "";
        }
    }

    // dernier mot
    $len = 0;
    while (isset($mot[$len])) $len++;

    if ($len >= 2 && $mot[$len-2] == "m" && $mot[$len-1] == "e") {
        $mot .= "_";
    }

    $new .= $mot;

    return $new;
}

// --------------------------------------------------------------
// TRAITEMENT DU FORMULAIRE
// --------------------------------------------------------------
$resultat = "";

if (isset($_POST["str"]) && isset($_POST["fonction"])) {

    $str = $_POST["str"];
    $f = $_POST["fonction"];

    if ($f == "gras") {
        $resultat = gras($str);
    }
    if ($f == "cesar") {
        $resultat = cesar($str); // décalage par défaut 2
    }
    if ($f == "plateforme") {
        $resultat = plateforme($str);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Job 07</title>
</head>
<body>

<form method="POST">
    <input type="text" name="str">

    <select name="fonction">
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>

    <button type="submit">Valider</button>
</form>

<p><?php echo $resultat; ?></p>

</body>
</html>
