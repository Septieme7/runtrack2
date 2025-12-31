# Runtrack2 – Jour07

## 📘 Contenu du dossier

Ce dossier contient **tous les jobs du Jour 07**, chacun dans un sous-dossier `jobXX/` avec son fichier `index.php`.


* Pas de fonctions système (sauf `isset`) ✔
* Un fichier `index.php` par job ✔

---

# 🟦 Jobs 01 à 07 – Explications + Code + Analyse Ligne-par-Ligne

## 🟩 **Job 01 — Fonction hello()**

### ▶ Objectif

Créer une fonction simple et l’appeler.

### ▶ Code

```php
function hello() {
    echo "Hello LaPlateforme!";
}
hello();
```

### ▶ Explication ligne par ligne

1. `function hello() {` → Déclare une fonction.
2. `echo "Hello LaPlateforme!";` → Affiche le texte demandé.
3. `hello();` → Appelle la fonction pour afficher le message.

---

## 🟩 **Job 02 — Fonction bonjour()**

```php
function bonjour($jour) {
    if ($jour == true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}
```

### Explication

* Paramètre `$jour` → booléen
* Condition : `true` → Bonjour / `false` → Bonsoir

---

## 🟩 **Job 03 — Fonction getHello()**

```php
function getHello() {
    return "Hello LaPlateforme!";
}
echo getHello();
```

### Explication

* `return` renvoie une valeur (sans l’afficher directement)
* `echo getHello();` affiche le contenu retourné

---

## 🟩 **Job 04 — Fonction calcule()**

```php
function calcule($a, $operation, $b) {
    if ($operation == "+") return $a + $b;
    if ($operation == "-") return $a - $b;
    if ($operation == "*") return $a * $b;
    if ($operation == "/") return $a / $b;
    if ($operation == "%") return $a % $b;
}
```

### Explication

* `$operation` indique quelle opération faire
* Série de `if` pour retourner le bon calcul

---

## 🟩 **Job 05 — Fonction occurrences()**

```php
function occurrences($str, $char) {
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] == $char) {
            $count++;
        }
    }
    return $count;
}
```

### Explication

* Parcours caractère par caractère
* Incrémente `$count` si un match est trouvé

---

## 🟩 **Job 06 — Fonction leetSpeak()**

```php
$table = [ "A"=>"4", "a"=>"4", "B"=>"8", ... ];
$result = "";
for ($i = 0; isset($str[$i]); $i++) {
    $car = $str[$i];
    if (isset($table[$car])) $result .= $table[$car];
    else $result .= $car;
}
return $result;
```

### Explication

* `$table` = dictionnaire de conversion
* Parcours de la chaîne
* Remplacement si caractère dans le tableau

---

## 🟩 **Job 07 — Formulaire + transformations**

Fonctions :

* **gras()** → met en `<b>` les mots commençant par une majuscule
* **cesar()** → décalage des lettres (César +2 par défaut)
* **plateforme()** → ajoute "_" aux mots terminant par "me"

### ▶ Explication ligne-par-ligne (résumé)

* `if (isset($_POST["str"]))` → Teste si formulaire envoyé
* `$str = $_POST["str"];` → Récupère la valeur
* Test de la fonction choisie
* Appel dynamique de la transformation
* Affichage du résultat dans `<p>`

---

# 🟥 VERSION POO (Object-Oriented)

Version orientée objet de toutes les fonctions des jobs 01 à 07.

```php
class Exercices {

    public function hello() {
        return "Hello LaPlateforme!";
    }

    public function bonjour($jour) {
        return $jour ? "Bonjour" : "Bonsoir";
    }

    public function getHello() {
        return "Hello LaPlateforme!";
    }

    public function calcule($a, $op, $b) {
        if ($op == "+") return $a + $b;
        if ($op == "-") return $a - $b;
        if ($op == "*") return $a * $b;
        if ($op == "/") return $a / $b;
        if ($op == "%") return $a % $b;
    }

    public function occurrences($str, $char) {
        $count = 0;
        for ($i = 0; isset($str[$i]); $i++) {
            if ($str[$i] == $char) $count++;
        }
        return $count;
    }

    public function leetSpeak($str) {
        $table = [ 'A'=>'4','a'=>'4','B'=>'8','b'=>'8','E'=>'3','e'=>'3','G'=>'6','g'=>'6','L'=>'1','l'=>'1','S'=>'5','s'=>'5','T'=>'7','t'=>'7' ];
        $res = "";
        for ($i = 0; isset($str[$i]); $i++) {
            $c = $str[$i];
            $res .= isset($table[$c]) ? $table[$c] : $c;
        }
        return $res;
    }

    public function gras($str) {
        $mots = explode(" ", $str);
        foreach ($mots as &$mot) {
            if ($mot !== "" && $mot[0] >= 'A' && $mot[0] <= 'Z') {
                $mot = "<b>$mot</b>";
            }
        }
        return implode(" ", $mots);
    }

    public function cesar($str, $decalage = 2) {
        $res = "";
        for ($i = 0; isset($str[$i]); $i++) {
            $c = $str[$i];
            if ($c >= 'a' && $c <= 'z') {
                $res .= chr((ord($c) - 97 + $decalage) % 26 + 97);
            } elseif ($c >= 'A' && $c <= 'Z') {
                $res .= chr((ord($c) - 65 + $decalage) % 26 + 65);
            } else {
                $res .= $c;
            }
        }
        return $res;
    }

    public function plateforme($str) {
        $mots = explode(" ", $str);
        foreach ($mots as &$mot) {
            $len = strlen($mot);
            if ($len >= 2 && $mot[$len-2] == 'm' && $mot[$len-1] == 'e') {
                $mot .= '_';
            }
        }
        return implode(" ", $mots);
    }
}
```
