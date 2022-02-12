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
            // Ceci est un commentaire sur une seule ligne

            /* 
                Comemntaire sur plusieurs lignes
            */

            /**
             * DOC PHP
             */

            //string    
            $expression = "Je vais apprendre du PHP";
            // not to do
            echo 'le type de la variable $expression est : ' ;
            echo gettype($expression);
            // concatened return function with string
            echo '<br/>le type de la variable $expression est : ' . gettype($expression);
            // /string

            // int = integers
            $age = 23;
            echo '<br/>le type de la variable $expression est : ' . gettype($age);
            // /int

            // float
            $prix = 42.5;
            echo '<br/>le type de la variable $expression est : ' . gettype($prix);
            // /float

            // boolean
            $verite = true;
            echo '<br/>le type de la variable $expression est : ' . gettype($verite);
            // /fboolean

        ?>
    </body>
</html>