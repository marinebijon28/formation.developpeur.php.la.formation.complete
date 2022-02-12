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
            $prenom = "Amine";
            $anciennete = 45;
            echo $prenom . "<br/>";
            echo $anciennete . "<br/>";;

            echo "L'ancienneté du formateur est de $anciennete ans <br/>";

            // not displayed the value
            echo 'L\'ancienneté du formateur est de $anciennete ans <br/>';
            // displayed the value
            // dot concatenate variable and string
            echo 'L\'ancienneté du formateur est de ' . $anciennete . ' ans <br/>';

            // not to do
            echo 'L\'ancienneté du formateur est de ';
            echo $anciennete;
            echo ' ans <br/>';

        ?>
    </body>
</html>