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

            function Bonjour($nom) {
                echo "bonjour " . $nom . '<br/>';
            }

            // function name is case insensitive unlike variable names
            bonjour("toto");
            bonjour("titi");
            bonjour("tutu");

            // $radius and $height are arguments
            function volume($radius, $height) {
                echo "le volume de du cylindre est " . M_PI * $radius ** 2 * $height;
            }

            volume(3, 5);

        ?>

    </body>
</html>