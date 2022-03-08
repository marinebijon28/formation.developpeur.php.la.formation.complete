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
            $y = 10;

            function somme() {
                $z = 13;
                echo $z . '<br/>';
                // $x et $y ne sont pas défini dans cette function et ne sont pas utilisable dans cette fonctions
                echo $x + $y . '<br/>';  
                
            }

            echo $z . '<br/>';
            echo $x + $y . '<br/>';
            somme();
        ?>

    </body>
</html>