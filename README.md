# -TP02-PHP-BENCHANAA-FATIMAZAHRA
 TP 02 PHP — Programmation Web 2 — 2026/2027
## Informations générales
* **Nom :**BENCHANAA 
* **Prénom :**FATIMAZAHRA
* **Groupe :** G2
* **Année universitaire :** 2026/2027


## Liste des exercices
* `index.php` : Page d'accueil avec liens vers tous les exercices.
* `ex01.php` : Balises, affichage et commentaires.
* `ex02.php` : Variables, casse et concaténation.
* `ex03.php` : Constantes et calculs (TVA).
* `ex04.php` : Types de données et conversions.
* `ex05.php` : Conditions et structures de contrôle (`if`).
* `ex06.php` : Utilisation de `switch`.
* `ex07.php` : Boucles `for` (table de multiplication et pyramide).
* `ex08.php` : Boucles `while`, `do-while` et contrôle d'itérations.
* `ex09.php` : Tableaux associatifs et statistiques.
* `ex10_get.html` / `ex10_get.php` : Formulaire et traitement en méthode GET.
* `ex10_post.html` / `ex10_post.php` : Formulaire et traitement en méthode POST.

## Réponses de l'Exercice 2

### 1. Différence entre `$note` et `$Note`
En PHP, les noms de variables sont **sensibles à la casse** (minuscules et majuscules). Par conséquent, `$note` et `$Note` sont deux variables complètement indépendantes qui stockent des valeurs distinctes.

### 2. Validation des noms de variables
En PHP, un nom de variable valide commence par un signe dollar (`$`) suivi d'une lettre ou d'un tiret bas (`_`), puis de lettres, chiffres ou tirets bas.

* **`$a`** : Valide
* **`$_a`** : Valide
* **`$a_a`** : Valide
* **`$AAA`** : Valide
* **`$a!`** : Invalide (contient le caractère spécial `!`)
* **`$1a`** : Invalide (commence par un chiffre après le `$`)
* **`$a1`** : Valide
## Réponses de l'Exercice 4
### Différence d'affichage de `false` entre `echo` et `var_dump()`

* **Avec `echo` :** La valeur booléenne `false` est convertie en une chaîne de caractères vide (`""`). Par conséquent, l'utilisation d' `echo false;` ne produit aucun affichage visible à l'écran. (À l'inverse, `true` est converti en `1`).
* **Avec `var_dump()` :** Cette fonction est destinée au débogage. Elle affiche non seulement la valeur exacte, mais aussi son **type de données** ainsi que sa **taille** (par exemple : `bool(false)`). Cela permet de distinguer clairement un booléen d'une chaîne vide ou d'une autre valeur.
## Réponses de l'Exercice 5
### Résultats des tests de l'Exercice 5 (Gestion des notes)

Voici les différents cas testés pour la variable `$moyenne` ainsi que les messages affichés :

* **Valeur testée : `-1`** $\rightarrow$ Message : *Note invalide*
* **Valeur testée : `9`** $\rightarrow$ Message : *Non validé*
* **Valeur testée : `10`** $\rightarrow$ Message : *Passable*
* **Valeur testée : `12`** $\rightarrow$ Message : *Assez bien*
* **Valeur testée : `14`** $\rightarrow$ Message : *Bien*
* **Valeur testée : `16`** $\rightarrow$ Message : *Très bien*
* **Valeur testée : `21`** $\rightarrow$ Message : *Note invalide*