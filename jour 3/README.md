# 🔥 Jour 03 - Manipulation de chaînes en PHP

Ce dossier contient les exercices du jour 03 sur la manipulation de chaînes de caractères et les tableaux en PHP.

---

## 📋 Job 01 - Nombres pairs et impairs

**Objectif :** Déterminer si des nombres sont pairs ou impairs

**Ce que fait le code :**
- Crée un tableau avec 7 nombres
- Parcourt le tableau avec une boucle `foreach`
- Teste chaque nombre avec l'opérateur modulo (`%`)
- Affiche "X est paire" ou "X est impaire"

**Concepts utilisés :**
- Tableaux (`array()`)
- Boucle `foreach`
- Opérateur modulo (`%`)
- Conditions `if/else`

---

## 🔤 Job 02 - Un caractère sur deux

**Objectif :** Afficher un caractère sur deux d'une chaîne

**Ce que fait le code :**
- Stocke une citation dans une variable `$str`
- Parcourt la chaîne avec une boucle `for` qui incrémente de 2
- Affiche uniquement les caractères aux positions 0, 2, 4, 6...

**Concepts utilisés :**
- Accès aux caractères par index (`$str[$i]`)
- Boucle `for` avec incrément personnalisé (`$i += 2`)
- Fonction `strlen()` pour la longueur

---

## 🎵 Job 03 - Extraction des voyelles

**Objectif :** Filtrer et afficher uniquement les voyelles d'une phrase

**Ce que fait le code :**
- Crée un tableau contenant toutes les voyelles (a, e, i, o, u, y)
- Parcourt chaque caractère de la chaîne
- Compare chaque caractère avec le tableau des voyelles
- Conserve uniquement les voyelles trouvées

**Concepts utilisés :**
- Tableaux de référence
- Boucles imbriquées
- Comparaison de caractères
- Concaténation de chaînes

---

## 🔢 Job 04 - Comptage de caractères

**Objectif :** Compter manuellement le nombre de caractères d'une chaîne

**Ce que fait le code :**
- Parcourt la chaîne caractère par caractère
- Incrémente un compteur à chaque itération
- Continue jusqu'à rencontrer un caractère vide (`""`)
- Affiche le nombre total de caractères

**Concepts utilisés :**
- Boucle `for` avec condition personnalisée
- Variable compteur
- Test de fin de chaîne

---

## 📊 Job 05 - Voyelles et consonnes

**Objectif :** Compter séparément les voyelles et les consonnes

**Ce que fait le code :**
- Crée un dictionnaire avec les clés "voyelles" et "consonnes"
- Vérifie si chaque caractère est une lettre (a-z, A-Z)
- Détermine si c'est une voyelle ou une consonne
- Incrémente le bon compteur dans le dictionnaire
- Affiche les résultats dans un tableau HTML

**Concepts utilisés :**
- Tableaux associatifs (dictionnaires)
- Comparaison de plages (`>=` et `<=`)
- Tableaux HTML (`<table>`, `<thead>`, `<tbody>`)
- Logique conditionnelle complexe

---

## 🔄 Job 06 - Inversion de chaîne

**Objectif :** Inverser l'ordre des caractères d'une phrase

**Ce que fait le code :**
- Calcule la longueur de la chaîne manuellement
- Parcourt la chaîne de la fin vers le début
- Démarre à l'index `longueur - 1` et décrémente jusqu'à 0
- Construit une nouvelle chaîne avec les caractères inversés

**Concepts utilisés :**
- Boucle descendante (`$i--`)
- Calcul de longueur sans fonction système
- Accès aux caractères par index inversé
- Construction progressive de chaîne

---

## 🔁 Job 07 - Rotation circulaire

**Objectif :** Décaler tous les caractères d'une position vers la gauche

**Ce que fait le code :**
- Sauvegarde le premier caractère
- Parcourt la chaîne en prenant le caractère suivant
- Remplace chaque position par le caractère d'après
- Place le premier caractère sauvegardé à la fin

**Concepts utilisés :**
- Variable temporaire
- Décalage de positions
- Rotation circulaire (le dernier devient le premier)
- Parcours avec offset (`$str[$i + 1]`)

---

## 🎨 Style

Tous les jobs utilisent un thème avec :
- Couleurs : rouge (#ff3300), noir (#0a0a0a), orange (#ff6600), jaune (#ffaa00)
- Effets de néon et ombres lumineuses
- Animations (clignotement, pulsation, rotation)
- Police monospace (Courier New)
- CSS séparé du HTML

---

## 🚀 Utilisation

Chaque job est dans son propre dossier avec :
```
jobXX/
├── index.php    					Code PHP et HTML
└── job01,02,03,04,05,06,07.css   
```

Pour tester un job, ouvrez simplement `index.php` dans votre navigateur avec un serveur PHP.

---

## 📝 Notes importantes

- ✅ Pas de fonctions système interdites (sauf `isset`)
- ✅ HTML5 valide
- ✅ CSS externe (jamais dans le HTML)
- ✅ Code commenté et lisible
- ✅ Commits Git réguliers et explicites