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
           
           $informationsUtilisateurs = [
               'nom' => 'Mastafi',
               'prenom' => 'Amine',
               'age' => 45,
               'ville' => 'Paris',
               'codePostal' => 75000,
               'niveau' => 'Compétent'
           ];

           // return true if the keyword is in array
           echo array_key_exists('age', $informationsUtilisateurs) . '<br/>';

           // return true if the value is in array
           echo in_array('Mastafi', $informationsUtilisateurs) . '<br/>';

        ?>
        
    </body>
</html>