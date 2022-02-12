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

