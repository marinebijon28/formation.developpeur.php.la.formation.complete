<!DOCTYPE html>
<html>
    <head>
        <title>
            Premier pas en php
        </title>
    </head>
    <body>
        <h1>
            Premier pas dans la programmation
        </h1>
        <h2>
            Suivez le guide
        </h2>
        <?php
            echo 'Je m\'appelle Mohamed <br/>';
            echo "Je m'appelle Mohamed <br/>";

            // Since PHP 8 you can use quotes within quotes
            echo "Cette formation va abordé le ”PHP” tout au long de ces vidéos<br/>";
            // PHP version 7
            echo "Cette formation va abordé le \”PHP\” tout au long de ces vidéos<br/>";
            echo'Cette formation va abordé le ”PHP” tout au long de ces vidéos<br/>';

            // string
            echo "45<br/>";
            // int
            echo 65;

            print "<br/>Mon nom est Mohamed";
            print '<br/>Mon nom est Mohamed<br/>';

            // other way

            // Since PHP 8 you can use quotes within quotes
            echo("Cette formation va abordé le ”PHP” tout au long de ces vidéos<br/>");
            // PHP version 7
            echo("Cette formation va abordé le \”PHP\” tout au long de ces vidéos<br/>");
            echo('Cette formation va abordé le ”PHP” tout au long de ces vidéos<br/>');

            // string
            echo("45<br/>");
            // int
            echo(65);

            print("<br/>Mon nom est Mohamed");
            print('<br/>Mon nom est Mohamed');
        ?>
    </body>
</html>