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

            $x = 12;

            // the argument is a pointer so the value is changed throughout the program
            function produitPar10(&$nombre) {
                $nombre *= 10;
                echo 'Le calcul est donné par cette function est : ' . $nombre . '<br/>';
            }

            echo "x = " . $x . "<br/>";
            produitPar10($x);
            echo "x = " . $x . "<br/>";
            

        ?>

    </body>
</html>