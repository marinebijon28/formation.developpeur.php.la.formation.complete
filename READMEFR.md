### formation.developpeur.php.la.formation.complete

## section 1 : Introduction et mise en place de l'environnement de développement

# Communication client serveur dans le cas d'un site statique
                 -----------------------------demande->
Poste utilisateur                                       Seveurs
                 <-affichage de la reponse-------------

# Communication client serveur dans le cas d'un site dynamique
                 -----------------------------demande->
Poste utilisateur               génération de la page   Serveurs
                 <-affichage de la réponse-------------

# Pour un site web statique
- HTML
- CSS

# Site dynamique
- Les autres langages

# Deux méthodes de développement
- Développement du site directement sur le serveur d'hébergement 
- Développement sur site en local c'est-à-dire sur le disque dur de notre PC. Puis à la fin, le site sera renvoyé au serveur distant qui va à l'héberger (utilisateur d'un logiciel FTP comme FileZila)

# Environnement site web dynamique 
- MySQL
- Langages de programmation (sauf HTML et CSS)
- Apache Server

# Server local
- WAMP : pour windows
- MAMP : pour Mac
- LAMP : pour Linux
- XAMPP: Toutes les distributions

# Fonction d'affichage
- echo
- print

Example :

echo 'Je m\'appelle Mohamed <br/>';
echo "Je m'appelle Mohamed <br/>";

// Since PHP 8 you can use quotes within quotes
echo "Cette formation va abordé le ”PHP” tout au long de ces vidéos<br/>";
           
print "<br/>Mon nom est Mohamed";
print '<br/>Mon nom est Mohamed<br/>';

// Since PHP 8 you can use quotes within quotes
echo("Cette formation va abordé le ”PHP” tout au long de ces vidéos<br/>");
// PHP version 7
echo("Cette formation va abordé le \”PHP\” tout au long de ces vidéos<br/>");
echo('Cette formation va abordé le ”PHP” tout au long de ces vidéos<br/>');

print("<br/>Mon nom est Mohamed");
print('<br/>Mon nom est Mohamed');

## Section 2 : Variables

# Qu'est-ce qu'une variable ?
- une variable conteneur (contenu temporaire)
- une variable à l'intéreiur de laquelle on peut placer un contenu

# comment déclarer une variable ?
//$nomVariable = valeurVariable;

# Exemples : 
$nom = "Mercier";
$prenom = "claire";
$age = 18;

La variable doit toujours commencez par un $
Le nom doit commencer par une lettre ou le underscore (_).

# Le nom de la variable est sensible à la casse
//$variable
$VARIABLE
$Variable

# Types de variables
Les variables sont susceptibles de stocker différents types de données : 
- Les chaînes de caractères (texte) : type string en anglais
- Les nombres entiers : type (int) en anglais
- Les nombres décimaux : type float (nombre à virgule)
- Les booléens : type boolean (bool) nee prennent que deux valeurs (true = vrai ou false = faux)
- Une variable qui contient rien, on lui affecte le type null (rien)
- Le type "tableau" ou Array en anglais;
- Le type "objet" ou Pbject en anglais;

# Constantes :
- Elles s'écrit toujours en majuscule. Pout définir une constante. On utilise le mot-clés define
define('CAPITAL', "Paris");

- Les constantes magiques sont disponible avec PHP. La constante change en fonction des cas;
echo __LINE__ . "<br/>";

- Les constantes avec des valeurs fixes
// true = 1;

# Opérateur affectation
- =

# Opérateurs arithmétiques
- + addition
- - soustraction
- * multiplication
- / division
- % modulo
- ** puissance

# Combinaison des opérateurs arithmétiques avce l'opérateur d'affectation
- += additionne puis affecte le résultat
- -= soustrait puis affecte le résultat 
- *= multiplie puis affecte le résultat
- /= divise puis affecte le résultat
- %= calcul le modulo puis affecte le résultat
- **= élève à la puissance puis affecte le résultat
- .= concatène puis affecte le résultat

# Les opérateurs de comparaison
- < inférieur strictement
- > supérieur strictement
- <= inférieur ou égale
- >= supérieur ou égale
- == pour tester l'égalité en termes de valeurs
- === pour tester  l'égalité  en termes de valeurs et de type 
- != pour tester la différence en termes de valeurs
- <=> pour tester la différence en termes de valeurs 
- !== Pour tester la différence en termes de valeurs et en type
- ?? pour tester valeur gauche si elle est null

