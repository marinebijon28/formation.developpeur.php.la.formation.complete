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
           $information = array(
               'nom' => "Mostafi",
               'prénom' => "Amine",
               'age' => 45,
               'ville' => "Paris",
               'niveau_etude' => "Doctorat",
           );

            echo $information['nom'] . '<br/>';
            echo $information['prénom'] . '<br/>';
            echo $information['age'] . '<br/>';
            echo $information['ville'] . '<br/>';
            echo $information['niveau_etude'] . '<br/>';

            // bad declaration tab
            $information1['nom'] = "Mostafi1";
            $information1['prénom'] = "Amine1";
            $information1['age'] = 45;
            $information1['ville'] = "Paris1";
            $information1['niveau_etude'] = "Doctorat1";

            echo $information1['nom'] . '<br/>';
            echo $information1['prénom'] . '<br/>';
            echo $information1['age'] . '<br/>';
            echo $information1['ville'] . '<br/>';
            echo $information1['niveau_etude'] . '<br/>';

            // good declaration tab
            $information = [
                'nom' => "Mostafi2",
                'prénom' => "Amine2",
                'age' => 45,
                'ville' => "Paris2",
                'niveau_etude' => "Doctorat2",
            ];

            echo $information['nom'] . '<br/>';
            echo $information['prénom'] . '<br/>';
            echo $information['age'] . '<br/>';
            echo $information['ville'] . '<br/>';
            echo $information['niveau_etude'] . '<br/>';


        ?>

    </body>
</html>