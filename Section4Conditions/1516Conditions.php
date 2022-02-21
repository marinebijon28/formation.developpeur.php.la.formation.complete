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

            $x = 20;
            $y = 30;
            
            // condition boolean if x < y return true and get in loop
            if ($x < $y) {
                echo $x . " inférieur a " . $y . "<br/>";
            }
            // not get in if if it's true 
            // condition boolean if y <= x return true and get in loop
            else {
                echo $y . " inférieur a " . $x . "<br/>";
            }
            
            $note = 15;
            // condition boolean if if it's true get in loop
            if ($note > 15) {
                echo "Très bien ! <br/>";
            }
            // not get in if if it's true 
            // condition boolean note > 12 get in loop
            else if ($note > 12) {
                echo "Bien ! <br/>";
            }
            else if ($note > 8) {
                echo "Moyen <br/>";
            }
            else {
                echo "vous devez faire un effort <br/>";
            }
        ?>
    </body>
</html>