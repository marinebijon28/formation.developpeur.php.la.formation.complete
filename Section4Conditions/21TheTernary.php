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

            $age = 22;

            echo $age >= 18 ? "Vous êtes majeurs <br/>" : "Vous êtes mineurs <br/>";
          
            $note = 18;
            $honorable = ($note >= 17) ? true : false;

                var_dump($honorable);
        ?>
    </body>
</html>