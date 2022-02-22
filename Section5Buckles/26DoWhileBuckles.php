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
            
            // do continue if while condition it's true
            do {
                echo 'La valeur de la variable $x est ' . $x . "<br/>";
                $x++; 
            }while ($x <= 20);

            echo "<br/>";

            $x = 21;

            // at least once the instructions
            do {
                echo 'La valeur de la variable $x est ' . $x . "<br/>";
                $x++; 
            }while ($x <= 20);
           
        ?>
    </body>
</html>