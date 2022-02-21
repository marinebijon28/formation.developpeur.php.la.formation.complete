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

           $x = 3;
           $y = 20;

           if ($x < $y AND $y % 2 == 0) {
               echo "les deux conditions sont vraies <br/>";
           }
           else {
               echo "une condition est fausse <br/>";
           }


           $x = 76;
           $y = 20;
           if ($x < $y OR $y % 2 == 0) {
                echo "une condition est vraies et l'autre n'est pas vérifié <br/>";
            }
            else {
                echo "les deux conditions sont fausses <br/>";
            }

            $x = 76;
            $y = 20;
            if ($x < $y OR $y % 2 == 0) {
                echo "une condition est et l'autre est vérifié et doit être false <br/>";
            }
            else {
                echo "les deux conditions sont fausses ou les deu conditions sont vraies <br/>";
            }
           
        ?>
    </body>
</html>