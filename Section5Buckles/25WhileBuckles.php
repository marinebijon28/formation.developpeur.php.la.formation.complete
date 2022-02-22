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

            $x = 0;

            while ($x <= 20) {
                // display str and value's x
                echo 'La valeur de la variable $x est ' . $x . ' <br/>';
                // increment
                $x++;
            }

            echo '<br/>';

            $x = 1;
            while ($x <= 10) {
                echo 'Le numéro de l\'instruction est : ' . $x . ' <br/>';
                $x++;
            }
           
        ?>
    </body>
</html>