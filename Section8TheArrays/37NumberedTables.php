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
           
            // bad declaration tab
            $pays_med = array('France', 'Espagne', 'Maroc', 'Algérie', 'Italie');

            // display the first value's array
            echo $pays_med[0] . '<br/>';
            echo $pays_med[1] . '<br/>';
            echo $pays_med[2] . '<br/>';
            echo $pays_med[3] . '<br/>';
            echo $pays_med[4] . '<br/>';

            // good declaration tab
            $pays_med = ['France1', 'Espagne1', 'Maroc1', 'Algérie1', 'Italie1'];

            // display the first value's array
            echo $pays_med[0] . '<br/>';
            echo $pays_med[1] . '<br/>';
            echo $pays_med[2] . '<br/>';
            echo $pays_med[3] . '<br/>';
            echo $pays_med[4] . '<br/>';

            // bad declaration tab
            $pays_med[0] = "France2";
            $pays_med[1] = "Espagne2";
            $pays_med[2] = "Maroc2";
            $pays_med[3] = "Algérie2";
            $pays_med[4] = "Italie2";

            echo $pays_med[0] . '<br/>';
            echo $pays_med[1] . '<br/>';
            echo $pays_med[2] . '<br/>';
            echo $pays_med[3] . '<br/>';
            echo $pays_med[4] . '<br/>';



        ?>

    </body>
</html>