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
            $x = 3;
            $y = 10;
            // display the type and value's variable
            var_dump($x);
            print "<br/>";

            // display boolean this comparison
            var_dump($x < $y);
            print "<br/>";

            // display boolean this comparison
            var_dump($x == $y);
            print "<br/>";

            $x = "10";
            $y = 10;
            // display boolean this comparison
            var_dump($x == $y);
            print "<br/>";

            // display boolean this comparison and type
            var_dump($x === $y);
            print "<br/>";

            $x = "10";
            $y = 10;
            // display boolean this comparison 
            var_dump($x != $y);
            print "<br/>";


            $x = "10";
            $y = 10;
            // display boolean this comparison a type
            var_dump($x !== $y);
            print "<br/>";

            $x = 12;
            $y = 10;
            // <=> php version 7
            // if left value inferior to right return 1
            // if right value inferior to left return -1
            // right and left value is equal return 0
            // display boolean this comparison 
            var_dump($x <=> $y);
            print "<br/>";

            $x = "12";
            $y = 10;
            // display boolean this comparison 
            var_dump($y <=> $x);
            print "<br/>";

            $x = "10";
            $y = 10;
            // display boolean this comparison 
            var_dump($y <=> $x);
            print "<br/>";

            // ?? php version 7
            // if left value is not null return left value 
            // else left value is null return right value
            $x = NULL;
            $y = 10;
            // display boolean this comparison 
            var_dump($x ?? $y);
            print "<br/>";
            var_dump($y ?? $x);
            print "<br/>";

            $x = 10;
            $y = NULL;
            // display boolean this comparison 
            var_dump($x ?? $y);
            print "<br/>";
            var_dump($y ?? $x);
            print "<br/>";

            $x = NULL;
            $y = NULL;
            // display boolean this comparison 
            var_dump($x ?? $y);
            print "<br/>";
            var_dump($y ?? $x);
            print "<br/>";

            $x = 12;
            $y = 13;
            // display boolean this comparison 
            var_dump($x ?? $y);
            print "<br/>";
            var_dump($y ?? $x);
            print "<br/>";
        ?>
    </body>
</html>