<?php
// Création de la variable string
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
// Création du dictionnaire
$dic = array(
    "consonnes" => 0,
    "voyelles" => 0
);
// Tableau contenant les voyelles (minuscules et majuscules)
$voyelles = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');
// Parcours de la chaîne caractère par caractère
for ($i = 0; $i < strlen($str); $i++) {
    $caractere = $str[$i];

    // Vérifier si c'est une lettre (pas un espace, apostrophe, etc.)
    $estLettre = ctype_alpha($caractere);

    // Si c'est une lettre, vérifier si c'est une voyelle ou une consonne
    if ($estLettre) {
        if (in_array($caractere, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 05 - Comptage voyelles et consonnes</title>
    <link rel="stylesheet" href="job05.css">
</head>
<body>
    <div class="container">
        <h1>Job 05 - Comptage voyelles et consonnes</h1>
        <div class="results">
            <div class="original">
                <strong>Texte analysé :</strong><br />
                <?php echo $str; ?>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Voyelles</th>
                        <th>Consonnes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $dic["voyelles"]; ?></td>
                        <td><?php echo $dic["consonnes"]; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
