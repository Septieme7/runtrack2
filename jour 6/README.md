# 📝 README — Job 05 : Choix de style (POO, 7 styles)

**Projet** : formulaire PHP orienté objet qui permet de sélectionner et charger dynamiquement un fichier CSS parmi 7 styles.

---

## 🎯 Description

Ce petit projet montre comment :

* générer du HTML avec PHP (POO),
* traiter un formulaire `POST`,
* valider une valeur choisie dans une liste déroulante,
* inclure dynamiquement un fichier CSS (`style1.css` ... `style7.css`) pour changer le rendu visuel.

Le code principal se trouve dans `index.php`. Les fichiers de styles sont `style1.css` à `style7.css`.

---

## 📁 Structure du projet

```
/projet/
│── index.php
│── style1.css
│── style2.css
│── style3.css
│── style4.css
│── style5.css
│── style6.css
│── style7.css
```

---

## ⚙️ Installation & test local

1. Copier tous les fichiers dans un dossier accessible par ton serveur PHP (ex: `htdocs` ou `www`).
2. Ouvrir dans le navigateur : `http://localhost/ton-dossier/index.php`.
3. Choisir un style et cliquer sur **Valider** — la page recharge et applique le CSS sélectionné.

---

## 🧩 Fichiers importants

* `index.php` — logique POO et génération du HTML.
* `style1.css` ... `style7.css` — variantes visuelles (background, police, formulaire, boutons).

---

## 📚 Chapitre : Explication ligne-par-ligne de `index.php`

> Cette section explique le fonctionnement de `index.php` ligne par ligne (ou bloc par bloc) pour t'aider à comprendre la logique, la sécurité et les bonnes pratiques utilisées.

### 1. Ouverture PHP

```php
<?php
```

* Démarre l'interpréteur PHP ; tout code PHP doit être placé entre `<?php` et `?>`.

### 2. Déclaration de la classe `StyleManager`

```php
class StyleManager
{
    private array $styles;
    private string $selectedStyle;

    public function __construct(array $styles, string $default = "style1")
    {
        $this->styles = $styles;
        $this->selectedStyle = $default;
    }

    public function isValidStyle(string $style): bool
    {
        return in_array($style, $this->styles, true);
    }

    public function setSelectedStyleFromRequest(array $request): void
    {
        if (isset($request['style']) && $this->isValidStyle((string)$request['style'])) {
            $this->selectedStyle = (string)$request['style'];
        }
    }

    public function getCssFile(): string
    {
        return $this->selectedStyle . ".css";
    }

    public function getSelectedStyle(): string
    {
        return $this->selectedStyle;
    }

    public function renderOptionsHtml(): string
    {
        $html = "";
        foreach ($this->styles as $style) {
            $selectedAttr = ($style === $this->selectedStyle) ? ' selected' : '';
            $safe = htmlspecialchars($style, ENT_QUOTES, 'UTF-8');
            $html .= "<option value=\"{$safe}\"{$selectedAttr}>{$safe}</option>\n";
        }
        return $html;
    }
}
```

* **But** : encapsuler la logique liée aux styles (validation, rendu des options, nom du fichier CSS).
* **Propriétés typées** : `array $styles`, `string $selectedStyle` (PHP 7.4+).
* **Constructeur** : reçoit le tableau de styles et un style par défaut.
* **Méthodes** :

  * `isValidStyle` : vérifie la présence dans le tableau (`in_array` avec comparaison stricte `true`).
  * `setSelectedStyleFromRequest` : sécurise et assigne la valeur venue du formulaire si valide.
  * `getCssFile` : retourne `styleX.css`.
  * `renderOptionsHtml` : construit la chaîne HTML des `<option>` en échappant (`htmlspecialchars`) pour éviter XSS. Ajoute `selected` si nécessaire.

### 3. Variables globales / initialisation

```php
$stylesArray = ["style1", "style2", "style3", "style4", "style5", "style6", "style7"];
$defaultStyle = "style3";
$isPost = ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST';
```

* Exemple de **types** : `array`, `string`, `bool`.
* `$_SERVER['REQUEST_METHOD'] ?? ''` : opérateur null-coalescent pour éviter des notices si la clé n'existe pas.

### 4. Instanciation et traitement du formulaire

```php
$manager = new StyleManager($stylesArray, $defaultStyle);

if ($isPost) {
    $manager->setSelectedStyleFromRequest($_POST);
}

$cssFile = $manager->getCssFile();
```

* Crée un objet `StyleManager`.
* Si la requête est `POST`, on récupère et on valide la valeur envoyée via `$_POST`.
* `getCssFile()` fournit le nom du fichier CSS à inclure (ex: `style5.css`).

### 5. Passage au HTML et inclusion du CSS

```php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 05 — Choix du style (POO)</title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($cssFile, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
```

* Ferme la portion PHP pour écrire du HTML statique.
* L'attribut `href` du `<link>` est généré dynamiquement et protégé par `htmlspecialchars` pour éviter l'injection dans l'attribut.

### 6. Corps du document et affichage dynamique

```php
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
```

* On affiche la valeur du style courant et la méthode HTTP à titre informatif (toujours `htmlspecialchars` pour sécurité).
* Le `<form method="post" action="">` ré-envoie vers la même page. Le `name="style"` est la clé dans `$_POST` utilisée ensuite.
* `renderOptionsHtml()` injecte les `<option>` déjà sécurisées.

---

## 🔐 Sécurité & bonnes pratiques (rapide)

* Toujours **échapper** les sorties dynamiques vers le HTML (`htmlspecialchars`).
* Valider les données côté serveur (`isValidStyle`) avant de les utiliser.
* Éviter d'inclure des chemins fournis par l'utilisateur sans contrôle (ici on concatène un nom connu et validé puis ajoute `.css`).
* Préférer la POO pour séparer la logique et faciliter la maintenance.

---