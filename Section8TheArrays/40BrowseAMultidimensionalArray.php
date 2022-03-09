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
            $informationsPays = array();
            // first line
            $informationsPays[0][0] = "France";
            $informationsPays[0][1] = "Paris";
            $informationsPays[0][2] = 80;
            // two lines
            $informationsPays[1][0] = "Canada";
            $informationsPays[1][1] = "Ottawa";
            $informationsPays[1][2] = 38;
            // three lines
            $informationsPays[2][0] = "Maroc";
            $informationsPays[2][1] = "Rabat";
            $informationsPays[2][2] = 40;
            // four lines
            $informationsPays[3][0] = "Espagne";
            $informationsPays[3][1] = "Madrid";
            $informationsPays[3][2] = 47;

            // browse the first line's array
            for ($i = 0; $i < count($informationsPays); $i++) {
                 // browse the second line's array
                for ($j = 0; $j < count($informationsPays[$i]); $j++) {
                    echo $informationsPays[$i][$j] . "<br/>";
                }
            }
        ?>

    </body>
</html>