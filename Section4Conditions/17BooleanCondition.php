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

            $dossierSelectionne = true;

            // if true get in loop
            if ($dossierSelectionne) {
                echo "validé <br/>";
            } 
            else {
                echo "échec <br/>";
            }

            // if not true get in loop
            if (!$dossierSelectionne) {
                echo "validé <br/>";
            } 
            else {
                echo "échec <br/>";
            } 
           
        ?>
    </body>
</html>