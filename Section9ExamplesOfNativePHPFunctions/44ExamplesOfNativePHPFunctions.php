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
           
            $note = 12.567786;
            // rounded to 3 numbers
            echo round($note, 3) . '<br/>';

            // int random betwen 10 and 46
            echo rand(10, 46) . '<br/>';

            // display date and time
            echo date("d/m/Y") . " " . date("H:i:s") . '<br/>';

            // display tab all information's date
            echo "<pre>";
            print_r(getdate());
            echo "</pre>"
        ?>
        
    </body>
</html>