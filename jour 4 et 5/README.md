# 🔥 Jour 04 - Formulaires GET et POST en PHP

Ce dossier contient les exercices du jour 04 sur la manipulation des formulaires HTML et des superglobales `$_GET` et `$_POST` en PHP.

---

## 📊 Job 01 - Comptage des arguments GET

**Objectif :** Compter le nombre d'arguments envoyés via GET

**Ce que fait le code :**
- Crée un formulaire HTML avec méthode GET
- Parcourt le tableau `$_GET` avec une boucle `foreach`
- Incrémente un compteur pour chaque argument reçu
- Affiche le nombre total d'arguments

**Concepts utilisés :**
- Formulaires GET
- Superglobale `$_GET`
- Boucle `foreach`
- Comptage d'éléments

---

## 📋 Job 02 - Tableau des arguments GET

**Objectif :** Afficher tous les arguments GET dans un tableau HTML

**Ce que fait le code :**
- Crée un formulaire avec plusieurs champs (prénom, nom, email)
- Parcourt `$_GET` pour récupérer toutes les paires clé/valeur
- Génère dynamiquement un tableau HTML avec `<thead>` et `<tbody>`
- Affiche chaque argument et sa valeur associée

**Concepts utilisés :**
- Tableaux HTML dynamiques
- Boucle `foreach` sur tableau associatif
- Affichage conditionnel avec `if (count($_GET) > 0)`

---

## 📮 Job 03 - Comptage des arguments POST

**Objectif :** Compter le nombre d'arguments envoyés via POST

**Ce que fait le code :**
- Crée un formulaire HTML avec méthode POST
- Parcourt le tableau `$_POST` avec une boucle `foreach`
- Compte le nombre d'arguments reçus
- Affiche le résultat

**Différence GET vs POST :**
- GET : données visibles dans l'URL
- POST : données invisibles, plus sécurisé pour informations sensibles

**Concepts utilisés :**
- Formulaires POST
- Superglobale `$_POST`
- Même logique que Job 01 mais avec POST

---

## 📊 Job 04 - Tableau des arguments POST

**Objectif :** Afficher tous les arguments POST dans un tableau HTML

**Ce que fait le code :**
- Formulaire POST avec plusieurs champs
- Parcourt `$_POST` pour extraire les données
- Génère un tableau HTML avec deux colonnes (Argument / Valeur)
- Affichage dynamique des résultats

**Concepts utilisés :**
- Même principe que Job 02 mais avec POST
- Plus sécurisé pour les données utilisateur

---

## 🔐 Job 05 - Formulaire de connexion

**Objectif :** Vérifier des identifiants de connexion

**Ce que fait le code :**
- Formulaire POST avec username et password
- Compare les valeurs avec des identifiants prédéfinis
- Si username = "John" ET password = "Rambo" → "C'est pas ma guerre"
- Sinon → "Votre pire cauchemar"

**Pourquoi POST et pas GET ?**
- Les mots de passe ne doivent JAMAIS apparaître dans l'URL
- POST masque les données sensibles
- Plus sécurisé pour l'authentification

**Concepts utilisés :**
- `isset()` pour vérifier l'existence des variables
- Conditions multiples avec `&&` (ET logique)
- Sécurité des formulaires

---

## 🔢 Job 06 - Détection Pair/Impair

**Objectif :** Déterminer si un nombre est pair ou impair

**Ce que fait le code :**
- Formulaire GET avec un champ "nombre"
- Utilise l'opérateur modulo (`%`) pour tester
- Si `$nombre % 2 == 0` → "Nombre pair"
- Sinon → "Nombre impair"

**Concepts utilisés :**
- Opérateur modulo (`%`)
- Conditions if/else
- Traitement de données numériques

---

## 🏠 Job 07 - Générateur de Maison ASCII

**Objectif :** Dessiner une maison en ASCII art avec dimensions personnalisées

**Ce que fait le code :**
- Formulaire avec deux champs : largeur et hauteur
- **Construction du toit** (triangle) :
  - Boucle pour créer chaque ligne du toit
  - Calcul des espaces avant les slashes
  - Ajout de `/`, `_`, et `\`
- **Construction des murs** (rectangle) :
  - Boucle pour créer les côtés verticaux
  - Ajout de `|` de chaque côté
  - Dernière ligne avec des underscores pour le sol

**Algorithme du toit :**
```
Ligne 0: 4 espaces + / + 0 underscores + \
Ligne 1: 3 espaces + / + 2 underscores + \
Ligne 2: 2 espaces + / + 4 underscores + \
...
```

**Concepts utilisés :**
- Boucles imbriquées
- Calculs mathématiques (espaces, underscores)
- Génération de contenu ASCII
- Tag `<pre>` pour préserver le formatage

---

## 🎨 Style

Tous les jobs utilisent un thème **Cyberpunk** avec :
- Fichiers CSS individuels : `job1.css`, `job2.css`, etc.
- Couleurs : rouge (#ff3300), noir (#0a0a0a), orange (#ff6600), jaune (#ffaa00)
- Effets de néon, ombres lumineuses et animations
- Formulaires stylisés avec focus interactif
- Police monospace (Courier New)

---

## 🚀 Utilisation

Structure des dossiers :
```
jour04/
├── job01/
│   ├── index.php
│   └── job1.css
├── job02/
│   ├── index.php
│   └── job2.css
├── job03/
│   ├── index.php
│   └── job3.css
├── job04/
│   ├── index.php
│   └── job4.css
├── job05/
│   ├── index.php
│   └── job5.css
├── job06/
│   ├── index.php
│   └── job6.css
└── job07/
    ├── index.php
    └── job7.css
```

Pour tester un job, ouvrez `index.php` dans votre navigateur avec un serveur PHP.

---

## 📝 Notes importantes

- ✅ Pas de fonctions système interdites (sauf `isset`)
- ✅ HTML5 valide
- ✅ CSS externe avec noms individuels
- ✅ GET pour les données non sensibles
- ✅ POST pour les données sensibles (mots de passe, connexion)
- ✅ Validation des données utilisateur
- ✅ Commits Git réguliers et explicites

---

## 🔑 Différences GET vs POST

| Critère | GET | POST |
|---------|-----|------|
| Visibilité | Données dans l'URL | Données cachées |
| Sécurité | Moins sécurisé | Plus sécurisé |
| Taille limite | ~2048 caractères | Illimitée |
| Usage | Recherches, filtres | Formulaires, connexion |
| Bookmark | Peut être sauvegardé | Ne peut pas être sauvegardé |

---

## 💡 Conseils

- Toujours utiliser POST pour les mots de passe
- Valider les données côté serveur
- Utiliser `isset()` avant d'accéder aux variables
- Échapper les données avec `htmlspecialchars()` en production
- Tester avec différentes valeurs pour vérifier la robustesse