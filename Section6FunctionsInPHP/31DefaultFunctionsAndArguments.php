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

            function Bonjour($nom) {
                echo "bonjour " . $nom . '<br/>';
            }
            function bonjour2($nom = "tutu"){
                echo "bonjour " . $nom . '<br/>';
            }

            // function name is case insensitive unlike variable names 
            bonjour("toto");

            // functions with default arguments
            bonjour2();

            //  error not param
            bonjour();
            

        ?>

    </body>
</html>