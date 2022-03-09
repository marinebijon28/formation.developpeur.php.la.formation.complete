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
           
            $informationsPays = [
                ["Pays" => "France",
                "Capitale" => "Paris",
                "Population" => 80],
                ["Pays" => "Canada",
                "Capitale" => "Ottawa",
                "Population" => 38],
                ["Pays" => "Maroc",
                "Capitale" => "Rabat",
                "Population" => 40],
                ["Pays" => "Espagne",
                "Capitale" => "Madrid",
                "Population" => 47]
            ];

            // browse the line's array
            for ($i = 0; $i < count($informationsPays); $i++) {
                echo $informationsPays[$i]["Pays"] . "<br/>";
                echo $informationsPays[$i]["Capitale"] . "<br/>";
                echo $informationsPays[$i]["Population"] . "<br/>";
           }

        ?>

    </body>
</html>