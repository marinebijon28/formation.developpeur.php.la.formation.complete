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

            $note = 11;
            switch ($note) {
                case 20 : 
                    echo "excellent travail";
                    break;
                case 19 : 
                    echo "félicitation du jury !";
                    break;
                case 18 : 
                    echo "félicitations";
                    break;
                case 17 : 
                    echo "très bien";
                    break;
                case 16 : 
                    echo "très bien";
                    break;
                case 15 : 
                    echo "bien";
                    break;
                case 14 : 
                    echo "assez bien";
                    break;
                default :
                    echo "vous avez pas fait assez d'effort";
                    break; 
            }
            
        ?>
    </body>
</html>