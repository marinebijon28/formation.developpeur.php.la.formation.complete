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
            function incrementer() {
                // The variable is defined once and keeps its value in its scope
                static $y = 0;
                // The variable is defined each time the function is called
                $x = 0;

                echo 'La valeur de la variable $x est : ' . $x . '<br/>';
                echo 'La valeur de la variable $y est : ' . $y . '<br/>';

                $x++;
                $y++;
            }

            incrementer();
            incrementer();
            incrementer();
            incrementer();
            incrementer();
            incrementer();
        ?>

    </body>
</html>