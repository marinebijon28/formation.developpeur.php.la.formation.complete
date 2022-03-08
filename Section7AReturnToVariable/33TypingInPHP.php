<?php
    // this line must be the first on the page
    // forces typed arguments to match the type of function arguments
    declare(strict_types = 1);
?>

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

           function somme($x, $y) {
                $z = $x + $y;
                echo $z . '<br/>';
                var_dump($z);
                echo '<br/>';
           }

           function somme2(int $x,int $y) {
                $z = $x + $y;
                echo $z . '<br/>';
                var_dump($z);
                echo '<br/>';
            }

           somme(2, 10);
           // transform the type string in int
           somme("20", 10);
           somme(3.5, 10);
            
           
            somme2(2, 10);
            // transform the type string in int
            somme2("20", 10);
            // transform the type float in int
            somme2(3.5, 10);
            

        ?>

    </body>
</html>