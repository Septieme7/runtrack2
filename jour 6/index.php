<?php
// index.php

// Déclaration d'une classe responsable de la gestion des styles et du formulaire
class StyleManager
{
    // Propriété : tableau des styles disponibles (type : array)
    private array $styles;

    // Propriété : style sélectionné (type : string)
    private string $selectedStyle;

    // Constructeur : initialise la liste des styles et la valeur par défaut
    public function __construct(array $styles, string $default = "style1")
    {
        $this->styles = $styles;
        $this->selectedStyle = $default;
    }

    // Vérifie si un style donné existe dans la liste des styles
    public function isValidStyle(string $style): bool
    {
        return in_array($style, $this->styles, true);
    }

    // Définit le style sélectionné après validation
    public function setSelectedStyleFromRequest(array $request): void
    {
        if (isset($request['style']) && $this->isValidStyle((string)$request['style'])) {
            // casting vers string pour sécurité
            $this->selectedStyle = (string)$request['style'];
        }
    }

    // Retourne le nom du fichier CSS correspondant au style sélectionné
    public function getCssFile(): string
    {
        return $this->selectedStyle . ".css";
    }

    // Retourne la valeur actuellement sélectionnée
    public function getSelectedStyle(): string
    {
        return $this->selectedStyle;
    }

    // Génère le HTML des options <option> pour la select
    public function renderOptionsHtml(): string
    {
        $html = "";
        foreach ($this->styles as $style) {
            // Définit l'attribut selected si correspond au style courant
            $selectedAttr = ($style === $this->selectedStyle) ? ' selected' : '';
            // escape la valeur pour prévenir XSS
            $safe = htmlspecialchars($style, ENT_QUOTES, 'UTF-8');
            $html .= "<option value=\"{$safe}\"{$selectedAttr}>{$safe}</option>\n";
        }
        return $html;
    }
}

// -------------------------------
// Variables (exemples de différents types)
// -------------------------------
$stylesArray = ["style1", "style2", "style3", "style4", "style5", "style6", "style7"]; // array
$defaultStyle = "style7"; // string
$isPost = ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST'; // bool

// Instanciation de la classe StyleManager (POO)
$manager = new StyleManager($stylesArray, $defaultStyle);

// Traitement du formulaire (on passe $_POST qui est un array)
if ($isPost) {
    $manager->setSelectedStyleFromRequest($_POST);
}

// Récupère le fichier CSS à inclure
$cssFile = $manager->getCssFile();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 05 — Choix du style (POO)</title>
    <!-- Inclusion dynamique du CSS selon le style sélectionné -->
    <link rel="stylesheet" href="<?php echo htmlspecialchars($cssFile, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<main class="container">
    <h1>Changer le style du formulaire (POO)</h1>

    <section class="info">
        <p>Style sélectionné : <strong><?php echo htmlspecialchars($manager->getSelectedStyle(), ENT_QUOTES, 'UTF-8'); ?></strong></p>
        <p>Méthode HTTP : <strong><?php echo htmlspecialchars($_SERVER['REQUEST_METHOD'] ?? '', ENT_QUOTES, 'UTF-8'); ?></strong></p>
    </section>

    <form method="post" action="">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style" aria-label="Choix du style">
            <?php echo $manager->renderOptionsHtml(); ?>
        </select>

        <button type="submit">Valider</button>
    </form>

    <section class="explanation">
        <h2>Expérimente</h2>
        <p>Choisis un style puis clique sur <em>Valider</em> — la page recharge le CSS correspondant.</p>
    </section>
</main>

</body>
</html>
