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
           
            $informationsPays = ['France', 'Espagne', 'Algérie', 'Tunisie', 'Italie'
            ];

            // browse the line's array
            foreach ($informationsPays as $pays) {
                echo $pays . '<br/>';
            }

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
            foreach ($informationsPays as $keys => $pays) {
                // display keys of the array
                echo $keys;
                foreach ($pays as $keys => $informations) {
                    echo $keys . " : " . $informations . '<br/>';
                }
            }


            // display all the array
            print_r($informationsPays);

            // display all pretty array
            echo "<pre>";
            print_r($informationsPays);
            echo "</pre>";

          

        ?>
        
    </body>
</html>