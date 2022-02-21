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

           $adherent = true;
           $age = 25;

           if ($adherent) {
                if ($age >= 21) {
                    echo "vous êtes adhérent et votre age est supérieur à 21";
                }
                else {
                    echo "vous êtes adhérent et votre age est inférieur à 21";
                }
           }
           else {
               echo "Vous n'êtes pas adhérent";
           }
           
        ?>
    </body>
</html>