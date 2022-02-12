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
            // magic constants
            // number of the line
            echo __LINE__ . "<br/>";
            echo __FILE__ . "<br/>";

            // constants
            define('CAPITAL', "Paris");
            define('NAISSANCE', "1997");

            echo CAPITAL . '<br/>' . NAISSANCE . '<br/>';
            // /constants

            // fixed value constants
            // true = 1;
            // false = 0;
        ?>
    </body>
</html>